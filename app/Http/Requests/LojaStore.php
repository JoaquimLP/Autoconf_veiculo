<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LojaStore extends FormRequest
{
    protected $errorBag = 'LojaStore';
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
            'nome' => 'required|string|max:150',
            'cnpj' => 'required|string|size:18',
            'cep' => 'required|numeric',
            'estado' => 'required|string|max:50',
            'cidade' => 'required|string|max:50',
            'bairro' => 'required|string|max:50',
            'endereco' => 'required|string|max:50',
            'numero' => 'required|numeric',
            'complemento' => 'required|string|max:50',
        ];
    }
}
