<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AdminUserFormRequest extends FormRequest
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
    public function rules( Request $request )
    {

        $id = $this->route('id');
        if( isset($id) && $id > 0 ){
            $id = ','.$id;
        } else {
            $id = '';
        }

        return [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:admin_users,email'.$id,
            'password' => 'required|max:200',
            'label' => 'max:100',
        ];
    }

    public function messages(){

        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório',
            'email.required' => 'O campo e-mail é de preenchimento obrigatório',
            'password.required' => 'O campo de senha é de preenchimento obrigatório',
        ];

    }
}
