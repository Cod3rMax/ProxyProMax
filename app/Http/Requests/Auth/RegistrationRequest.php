<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:7|max:200',
            'email' => 'required|email:filter|unique:users,email|max:200',
            'password' => 'required|required_with:password_confirmation|same:password_confirmation|min:8|max:15',
            'password_confirmation' => 'required',
        ];
    }
}
