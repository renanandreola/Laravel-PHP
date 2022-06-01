<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:2',
            'funcao' => 'required|min:2',
            'cpf' => 'required|max:14',
            'idade' => 'required|max:2',
            'sexo' => 'required|max:1',
            'telefone' => 'required|max:14',
            'email' => 'required|max:50',
            'cep' => 'required|max:9',
            'rua' => 'required|max:50',
            'bairro' => 'required|max:50',
            'cidade' => 'required|max:50',
            'estado' => 'required|max:2',
            'numero' => 'required|max:5',
        ];
    }
}
