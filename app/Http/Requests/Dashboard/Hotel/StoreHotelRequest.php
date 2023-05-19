<?php

namespace App\Http\Requests\Dashboard\Hotel;

use Illuminate\Foundation\Http\FormRequest;

class StoreHotelRequest extends FormRequest
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
            'name'        => 'required|string|max:255|min:4',
            'location'    => 'required|string|max:255',
            'rating'      => 'required|integer|min:1|max:5|digits:1',
            'description' => 'required|string',
            'image'       => 'required|image'
        ];
    }
}
