<?php

namespace App\Http\Requests\Dashboard\Plan;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->mycosis = ($this->mycosis) ? $this->merge(['mycosis' => 1]) : $this->merge(['mycosis' => 0]) ;
        $this->lunch = ($this->lunch) ? $this->merge(['lunch' => 1]) : $this->merge(['lunch' => 0]) ;
        $this->dinner = ($this->dinner) ? $this->merge(['dinner' => 1]) : $this->merge(['dinner' => 0]) ;
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
