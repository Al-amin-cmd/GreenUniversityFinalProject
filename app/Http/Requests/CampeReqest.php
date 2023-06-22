<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampeReqest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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

            'name' => 'required|min:3|max:185',
            'address' => 'required|min:4|max:205',
        ];
    }
    public function messages()
{
    return [
        'campcode.required' => 'Campe Code Please',
        'name.required' => 'Campe Name Please',
        'address.required' => 'Campe Address Please',
    ];
}
}
