<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'firstName' => 'required|string|max:255',
            'lastName'  => 'required|string|max:255',
            'email'     => 'required|string|max:255|email',
            'phone'     => 'required|numeric',
            'address'   => 'required|string|max:255',
            'address2'  => 'required|string|max:255',
            'country'   => 'required|string|max:255',
            'state'     => 'required|string|max:255',
            'zip'       => 'required|numeric',
        ];
    }
}
