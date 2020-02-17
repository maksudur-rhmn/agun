<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormPost extends FormRequest
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
          'product_name' => 'required',
          'product_price' => 'required|numeric',
          'product_category' => 'required'
        ];
    }
    public function messages()
    {
        return [
          'product_name.required' => 'Product er nam dao',
          'product_price.required' => 'Product price dao',
          'product_price.numeric' => 'Product price number hoite hobe bhai',
        ];
    }
}
