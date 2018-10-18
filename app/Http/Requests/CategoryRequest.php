<?php

namespace App\Http\Requests;

use App\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
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
                    'name' => "required|min:3|max:255|unique:categories",
                    'description' => 'nullable'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => "required|min:3|max:255|unique:categories,id".$this->get('id'),
                    'description' => 'nullable'
                ];
            }
            default:break;
        }

        //return [
            //'name' => "required|min:3|max:255|unique:categories,id".$this->get('id')
        //];
    }
}
