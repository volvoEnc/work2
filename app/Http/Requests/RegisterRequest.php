<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fio' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:4', 'string'],
        ];
    }
    public function messages()
    {
        return [
          'fio.required' => 'Введите ФИО',
          'fio.max' => 'Ваше ФИО слишком длинное, макс. 255 сим.',

          'email.required' => 'Введите Email',
          'email.email' => 'Введите корректный Email',
          'email.unique' => 'Такой Email уже зарегистрирован',

          'password.required' => 'Придумайте пароль',
          'password.confirmed' => 'Пароли не совпадают',
          'password.min' => 'Пароль слишком короткий, мин. 4 сим.',
        ];
    }
}
