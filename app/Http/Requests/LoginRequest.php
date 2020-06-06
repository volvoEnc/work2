<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Введите Email',
            'email.email' => 'Введите корректный Email'
        ];
    }
}
