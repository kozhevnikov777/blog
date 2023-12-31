<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для запонения',
            'name.string' => 'Имя должно быть строкой',
            'email.required' => 'Это поле необходимо для запонения',
            'email.string' => 'Почта должна быть строкой',
            'email.email' => 'Ваша почта должа соответствовать формату mail@some.domain',
            'email.unique' => 'Пользователь с таким email уже существует',
        ];
    }
}
