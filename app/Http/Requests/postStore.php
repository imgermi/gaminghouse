<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postStore extends FormRequest
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
            //Esto es para levantar los datos del form y validarlos.
            "titulo"=>"required|max:100", //Esto lo hago con todo los campos
            "content"=>"required|max:1000",
            "imagenPost"=>"required"
        ];
    }
}
