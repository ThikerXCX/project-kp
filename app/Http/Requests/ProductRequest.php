<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => ['required'],
            'brand_id' => ['required'],
            'name' => ['required'],
            'price' => ['required','numeric'],
            'stock' => ['required'],
            'spesifikasi' => ['required'],
            'img1' => 'nullable|image|mimes:jpeg,jpg,png',
            'img2' => 'nullable|image|mimes:jpeg,jpg,png',
            'img3' => 'nullable|image|mimes:jpeg,jpg,png',
            'img4' => 'nullable|image|mimes:jpeg,jpg,png',
        ];
    }
}
