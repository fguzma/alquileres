<?php

namespace Alquiler\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clienteUpdate extends FormRequest
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
            'Nombre'=>'required',
            'Apellido'=>'required',
            'Edad'=>'required|numeric',
            'Sexo'=>'required'
        ];
    }
}
