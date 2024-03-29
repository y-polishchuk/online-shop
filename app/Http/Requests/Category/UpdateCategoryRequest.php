<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
        $rules = [
            'en.category_name' => 'required|max:255|unique:categories,en.category_name,' . $this->category->id,
        ];

        foreach(config('translatable.locales') as $lang => $locale) {
            $rules[$locale . '.category_name'] = 'string|max:255';
        }
        return $rules;
    }
}
