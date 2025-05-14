<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'image' => ['required' , 'mimes:png,jpg'],
            'status' => 'required|string',
            'rating' => 'required|string',
            'time' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ];
    }
    public function attributes(): array
    {
        return [
            
            'category_id' => 'The selected is invalid.',
        ];
    }
}