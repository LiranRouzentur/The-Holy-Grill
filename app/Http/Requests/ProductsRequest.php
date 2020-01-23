<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;


class ProductsRequest extends FormRequest
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
    public function rules(Request $request)
    {

        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';

        return [

            'categorie_id' => 'required',
            'title' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/|unique:products,purl' . $item_id,
            'article' => 'required',
            'price' => 'required|numeric',
            'image' => 'image'

        ];
    }
    public function messages()
    {
        return [
            'categorie_id.required' => 'The choose category field is required.',
            'image' => 'The file must be an image (jpeg, png, bmp, gif, svg, or webp).',

        ];
    }
}
