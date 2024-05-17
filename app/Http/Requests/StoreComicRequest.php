<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:100',
            'thumb' => 'required|max:255',
            'type' => 'nulable|min:5|max:50',
            'series' => 'nullable|min:5|max:50',
            'sale_date' => 'nullable|min:4|max:15',
            'price' => 'nullable|max:6',
            'description' => 'nullable|min:100|max:250',
        ];
    }
}
