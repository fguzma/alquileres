<?php

namespace Alquiler\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloAdd extends FormRequest
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
            "ID_Servicio"=>'required|exists:servicio,ID_Servicio',
            'Nombre'=>'required',
            'Cantidad'=>'required|numeric',
            'Costo_Alquiler'=>'required|numeric',
            'Costo_Objeto'=>'required|numeric',
            'options'=>'required',
        ];
    }
}
