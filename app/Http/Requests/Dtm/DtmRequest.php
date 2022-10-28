<?php

namespace App\Http\Requests\Dtm;

use Illuminate\Foundation\Http\FormRequest;

class DtmRequest extends FormRequest
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
            'name' => 'required|max:255|min:3',
            'description' => 'sometimes',
            'group_id' => 'required',
            'count_tests' => 'required|numeric|max_digits:255'
        ];
    }
}
