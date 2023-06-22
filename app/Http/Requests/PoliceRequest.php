<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PoliceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|unique:campes|min:2|max:85',
            'designation' => 'required|min:3|max:185',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Police name Please',
            'designation.required' => 'Desiganation Please',
        ];
    }
}
