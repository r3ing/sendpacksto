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
        /*
        return [
            'name' => "required|min:3|max:255|unique:products",
            'description' => 'nullable',
            'price' => 'regex:/^\d+(\.\d{0,3})?$/'
        ];

         * ,
            'img1' => 'image|required',
            'img2' => 'image|nullable',
            'img3' => 'image|nullable',
            'img4' => 'image|nullable',
            'img5' => 'image|nullable',
         */
        switch($this->method())
        {
            /*
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            */
            case 'POST':
            {
                return [
                    'name' => "required|min:3|max:255|unique:products",
                    'description' => 'nullable',
                    'price' => 'regex:/^\d+(\.\d{0,3})?$/'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => "required|min:3|max:255|unique:products,id".$this->get('id'),
                    'description' => 'nullable',
                    'price' => 'regex:/^\d+(\.\d{0,3})?$/'
                ];
            }
            default:break;
        }
    }
}
