<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookRequest extends FormRequest
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

            'title' => [
                'required',
                Rule::unique('books', 'title')->ignore($this->request->get('id')),
            ],
            'slug' => [
                'required',
                Rule::unique('books', 'slug')->ignore($this->request->get('id')),
            ],
            'status' => 'required',
            'number_of_pages' => 'required|numeric|min:1',
            'publication_date' => 'required',
            'regular_price' => 'required|numeric|min:1',
            'sale_price' => 'nullable|numeric|min:1',
            'quantity' => 'required|numeric|min:1',
            'language_id' => 'required',
            'publisher_id' => 'required',
            'authors' => 'required',
            'genres' => 'required',
            'image' => 'nullable|image|max:8000',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */

    public function messages(): array
    {
        return [
            'required' => ':attribute không được để trống',
            'unique' => ':attribute đã tồn tại',
            'numeric' => ':attribute phải là số',
            'min' => ':attribute phải lớn hơn :min',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function attributes(): array
    {
        return [
            'title' => 'Tiêu đề',
            'slug' => 'Slug',
            'status' => 'Trạng thái',
            'number_of_pages' => 'Số trang',
            'publication_date' => 'Ngày xuất bản',
            'regular_price' => 'Giá',
            'sale_price' => 'Giá khuyến mãi',
            'quantity' => 'Số lượng',
            'language_id' => 'Ngôn ngữ',
            'publisher_id' => 'Nhà xuất bản',
            'authors' => 'Tác giả',
            'genres' => 'Thể loại',
        ];
    }

}
