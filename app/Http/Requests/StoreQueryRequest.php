<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQueryRequest extends FormRequest
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
            "name" => ["required", "string", "max:255"],
            "email" => ["required", "email", "max:255"],
            "phone" => ["required", "string", "max:255"],
            "service" => ["required", Rule::in(["Accounting Services", "Bookkeeping Services", "QuickBooks Consultation", "QuickBooks Bookkeeping"])],
            "query" => ["required", "string"]
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            "name" => ucwords($this->post("name")),
            "email" => strtolower($this->post("email")),
            "query" => ucfirst($this->post("query"))
        ]);
    }
}
