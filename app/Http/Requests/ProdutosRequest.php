<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required'
            ];
            
    }
    public function messages()
    {
        return [
        'required' => 'O campo :attribute nao pode ser vazio.',
        'numeric' => 'O campo :attribute precisa ser numerico'
        ];
    }

}
