<?php 
namespace estoque\Http\Controllers;

use Gate;
use estoque\Http\Requests\ProdutosRequest;
use estoque\Produto;
use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Auth\Access\Response;

class ProdutoController extends Controller {
    public function lista(){

        $produtos = Produto::all();

        return view('produto.listagem', ['produtos' => $produtos]);
    }

    public function listaJson(){

        $produtos = Produto::all();

        return $produtos;
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

    public function adiciona(ProdutosRequest $request){

        Produto::create($request->all());

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));

    }

    public function delete($id){
        $produto = Produto::find($id);
        
        // if (Gate::denies('update-delete', $produto)) {
        //     return 'oi';
        // }
        // $this->authorize('delete', $produto);
        $produto->delete();

        return redirect()
            ->action('ProdutoController@lista');
    }

    public function relatorioPdf(){
        $produtos = Produto::all();
    
        return \PDF::loadView('produto.relatorio', compact('produtos'))
                    // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                    // ->download('relatorioEstoque.pdf');
                    ->stream();
    }
        
}