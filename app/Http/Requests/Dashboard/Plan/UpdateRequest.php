<?php

namespace App\Http\Requests\Dashboard\Plan;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        if ($this->mycosis){
            $this->mycosis = 1;
        }else {
            $this->merge(['mycosis' => 0]);
        }

        if ($this->lunch){
            $this->lunch = 1;
        } else {
            $this->merge(['lunch' => 0]);
        }

        if ($this->dinner){
            $this->dinner = 1;
        }else {
            $this->merge(['dinner' => 0]);
        }
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
