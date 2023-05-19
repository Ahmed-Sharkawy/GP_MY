<?php

namespace App\Http\Requests\Web\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "name"                  => 'required|string|max:255',
            "email"                 => 'required|string|max:255|email',
            "location"              => 'required|string|max:255',
            "password"              => 'required|string|min:8',
            "password_confirmation" => 'required|string|min:8|required_with:password|same:password',
        ];
    }
}
