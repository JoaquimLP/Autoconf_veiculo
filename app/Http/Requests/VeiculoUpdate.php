<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoUpdate extends FormRequest
{
    protected $errorBag = 'veiculoUpdate';
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
            'placa' => 'required|size:8',
            'chassis' => 'required|alpha_num|size:16',
            'marca' => 'required|numeric',
            'loja' => 'required|numeric',
            'modelo_id' => 'required|numeric',
            'anomodelo'=> 'required|numeric|date_format:Y',
            'anofabricacao'=> 'required|numeric|date_format:Y',
        ];
    }
}
