<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PecaRequest extends FormRequest
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
            'nome' => 'required|min:2|max:50',
            'codigo' => 'required|min:2|max:50',
            'fornecedor' => 'required|min:2|max:50',
            'aplicacao' => 'required|min:2|max:50',
            'estoque' => 'required|max:10',
        ];
    }
}
