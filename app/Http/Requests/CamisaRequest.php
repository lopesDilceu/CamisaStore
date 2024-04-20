<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CamisaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'uniforme' => 'required|string|max:9',
            'patrocinadores' => 'boolean',
            'numero' => 'string|nullable',
            'nome' => 'string|nullable',
            'tamanho' => 'required|string|max:13',
            'quantidade' => 'required|integer',
            'observacao' => 'string|nullable',
        ];
    }
    
    public function messages(): array
    {
        return [
            'uniforme.required' => 'O uniforme é obrigatória.',
            'uniforme.max' => 'O uniforme deve ter no máximo 15 caracteres.',
            'tamanho.required' => 'O tamanho é obrigatório.',
            'tamanho.max' => 'O tamanho deve ter no máximo 13 caracteres.',
            'quantidade.required' => 'A quantidade é obrigatória.',
            'quantidade.integer' => 'A quantidade deve ser um número inteiro.',
            'observacao.required' => 'A observação é obrigatória.',
            'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
        ];
    }
}
