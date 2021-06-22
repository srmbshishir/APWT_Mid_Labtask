<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'email|required|max:50',
            'password' => 'required|alpha_num|min:8|max:20',
        ];
    }

    public function messages(){
        return [
            'email.required' => "Email can't left empty...",
            'email.max' => "Email can be maximum 50 character..",
            'password.min' => "Must be at least 8 char..",
            'password.max' => "Password can be maximum 20 character..",
            'password.required' => "Password can't left empty..."
        ];
    }
}
