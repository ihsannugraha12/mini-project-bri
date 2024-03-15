<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsistenPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_asisten' => 'required|max:10|unique:users',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role_id' => 'required',
            'join_date' => 'required',

            //
        ];
    }
}
