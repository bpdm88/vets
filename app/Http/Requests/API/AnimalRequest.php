<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "name"=> ["required", "string"],
            "type"=> ["required", "string"],
            "date_of_birth"=> ["required", "string"],
            "weight_kg"=> ["required", "integer"],
            "height_metres"=> ["required", "integer"],
            "biteyness"=> ["required", "string"],
            "treatments"=> ["nullable", "array"],
            "treatments.*"=> ["string", "max:30"]
        ];
    }
}
