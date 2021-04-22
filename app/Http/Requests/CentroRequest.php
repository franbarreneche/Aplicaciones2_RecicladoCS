<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CentroRequest extends FormRequest
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
            "nombre" => ["required","max:255"],
            "sigla" => ["required" , "max:4",Rule::unique('centros','sigla')->ignore($this->centro)],
            "horario" => ["required","string","max:255"],
            "telefono" => ["required", "string","max:255"],
            "coordinador_id" => ["integer","nullable","exists:ciudadanos,id"]
        ];
    }
}
