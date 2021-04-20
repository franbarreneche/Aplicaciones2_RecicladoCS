<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecicladoRequest extends FormRequest
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
            "objeto" => ["required","string"],
            "transporte" => ["required", "string"],
            "fecha_contacto" => ["required","date"],
            "fecha_recoleccion" => ["nullable","date"],
            "centro_id" => ["required","numeric"],
            "ciudadano_id" => ["required","numeric"],
            "recolector_id" => ["required","numeric"]
        ];
    }
}
