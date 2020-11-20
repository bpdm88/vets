<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class OwnerStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()['role'] === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'=>['required', 'string'],
            'last_name'=>['required', 'string'],
            'telephone'=>['required', 'string'],
            'email'=>['required', 'string'],
            'address_1'=>['required', 'string'],
            'address_2'=>['required', 'string'],
            'town'=>['required', 'string'],
            'postcode'=>['required', 'string'],
        ];
    }
}
