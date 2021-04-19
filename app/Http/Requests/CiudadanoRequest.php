<?php

namespace App\Http\Requests;

use App\Models\Ciudadano;
use Illuminate\Foundation\Http\FormRequest;

class CiudadanoRequest extends FormRequest
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
            "dni" => ["required","unique:ciudadanos","numeric"],
            "nombre" => ["required", "max:255"],
            "apellido" => ["required", "max:255"],
            "domicilio" => ["max:255"],
            "telefono" => ["max:255"]
        ];
    }
}
