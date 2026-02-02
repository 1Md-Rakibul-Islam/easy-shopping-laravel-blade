<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',

            'slug' => 'required|string|max:255|unique:products,slug',

            'short_description' => 'nullable|string|max:500',
            'description' => 'nullable|string',

            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0|lt:price',

            'stock' => 'required|integer|min:0',

            'in_stock' => 'required|boolean',

            'sku' => 'required|string|max:100|unique:products,sku',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'is_active' => 'required|boolean',

            // 'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Product name is required.',
            'slug.unique' => 'This slug already exists.',
            'sku.unique' => 'SKU must be unique.',
            'sale_price.lt' => 'Sale price must be less than regular price.',
            // 'category_id.exists' => 'Selected category is invalid.',
        ];
    }
}
