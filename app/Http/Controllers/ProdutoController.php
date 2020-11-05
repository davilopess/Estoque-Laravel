<?php 
namespace estoque\Http\Controllers;

use estoque\Produto;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
    public function lista(){

        $produtos = Produto::all();

        return view('produto.listagem', ['produtos' => $produtos]);
    }

    public function listaJson(){

        $produtos = DB::select('select * from produtos');

        return response()->json($produtos);
    }

    public function mostra($id){
        
        $produto = Produto::find($id);
              
        if(empty($produto)) {
            return "Esse produto não existe";
        }    
        return view('produto.detalhes')->with('p', $produto);

    }

    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(){
        Produto::create(Request::all());

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));

    }
}