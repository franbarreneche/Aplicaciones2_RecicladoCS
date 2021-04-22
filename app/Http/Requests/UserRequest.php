<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            "name" => ['required', 'string', 'max:255'],
            "email" => ['required', 'unique:users', 'email'],
            "password" => ['required', 'string', 'min:6'],
            "rol_id" => ['required','integer','exists:rols,id'],
            "ciudadano_id" => ['nullable','integer','gt:0','unique:users,ciudadano_id']
        ];
    }
}
