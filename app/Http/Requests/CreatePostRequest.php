<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            "topic" => ["required", "string"],
            "title" => ["required", "string"],
            "description" => ["required", "string"],
            "content" => ["required", "string"],
            "category" => ["required", "string"],
            "cta_header" => ["sometimes", "nullable", "string"],
            "cta_body" => ["sometimes", "nullable", "string"]
        ];
    }

    /**
     * Add more fields to validation and format the data
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            "topic" => ucwords($this->topic),
            "title" => ucwords($this->title),
            "url" => strtolower(str_replace(" ", "-", $this->title)),
            "image" => $this->image != "" ? $this->image : "images/blogs/post1.jpg"
        ]);
    }
}
