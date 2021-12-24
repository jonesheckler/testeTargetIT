<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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

        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                return [
                    'name' => 'required|min:3',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:5|max:15',
                    'cpf' => 'required|cpf|unique:users',
                    'telefone' => 'required|min:10'
                ];
            }

            case 'PUT':
            case 'PATCH': {
                    return [
                        'name' => 'min:3',
                        'email' => 'email|unique:users,email,'.$this->user,
                        'password' => 'min:5|max:15',
                        'cpf' => 'cpf|unique:users,cpf,'.$this->user,
                        'telefone' => 'min:10'
                    ];
                }

            default:
                break;
        }

       
    }
}

