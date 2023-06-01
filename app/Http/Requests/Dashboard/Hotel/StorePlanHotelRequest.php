<?php

namespace App\Http\Requests\Dashboard\Hotel;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanHotelRequest extends FormRequest
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
            'name'    => 'required|string|max:255',
            'days'    => 'required|string|max:255',
            'price'   => 'required|numeric',
            'mycosis' => 'nullable',
            'lunch'   => 'nullable',
            'dinner'  => 'nullable',
        ];
    }
}
