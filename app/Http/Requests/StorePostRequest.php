<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'videoURL' => 'nullable|url',
            'content' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Tiêu đề là bắt buộc.',
            'title.string' => 'Tiêu đề phải là một chuỗi ký tự.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'category_id.required' => 'Danh Mục là bắt buộc.',
            'category_id.exists' => 'Danh Mục không tồn tại.',
            'photo.image' => 'Hình phải là một file ảnh.',
            'photo.mimes' => 'Hình phải có định dạng: jpeg, png, jpg, gif, svg.',
            'photo.max' => 'Hình không được vượt quá 2MB.',
            'videoURL.url' => 'Link video phải là một URL hợp lệ.',
            'content.required' => 'Nội dung là bắt buộc.',
            'content.string' => 'Nội dung phải là một chuỗi ký tự.',
        ];
    }
}
