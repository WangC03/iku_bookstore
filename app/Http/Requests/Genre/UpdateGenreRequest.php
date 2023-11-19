<?php

namespace App\Http\Requests\Genre;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGenreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => [
                'required',
                Rule::unique('genres', 'name')->ignore($this->request->get('id')),
            ],
            'slug' => [
                'required',
                Rule::unique('genres', 'slug')->ignore($this->request->get('id')),
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Tên thể loại không được để trống',
            'name.unique' => 'Tên thể loại đã tồn tại',
            'slug.required' => 'Slug không được để trống',
            'slug.unique' => 'Slug đã tồn tại',
        ];
    }
}
