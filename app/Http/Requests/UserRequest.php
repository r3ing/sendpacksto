<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                    'name'          => 'required|max:100|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ\s]+$/',
                    'last_name'     => 'required|max:100|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ\s]+$/',
                    'email'         => 'required|email|unique:users',
                    'user'          => 'required|unique:users|min:4|max:20',
                    'password'      => 'required|confirmed',
                    'password_confirmation'      => 'required',
                    'type'          => 'required|in:user, admin'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name'          => 'required|max:100|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ\s]+$/',
                    'last_name'     => 'required|max:100|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ\s]+$/',
                    'email'         => 'required|email',
                    'user'          => 'required|min:4|max:20',
                    'password'      => 'confirmed',
                    'type'          => 'required|in:user, admin'
                ];
            }
            default:break;
        }
    }
}
