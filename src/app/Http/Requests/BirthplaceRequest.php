<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BirthplaceRequest extends FormRequest
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
            'place-name' => 'required|string'
        ];
    }

    public function messages() {
        return [
            'place-name.required' => '出身地を入力してください',
            'place-name.string' => '出身地を文字列で入力してください'
        ];
    }
}
