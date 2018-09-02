<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StudentFormRequest extends FormRequest
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

        $request->except(["_token"]);

        $id = $this->route('id');
        if( isset($id) && $id > 0 ){
            $id = ','.$id;
        } else {
            $id = '';
        }

        return [
            'name' => 'required|min:3|max:100',
            'login' => 'required|unique:students,login'.$id,
            'password' => 'required|max:200',
        ];
    }

    public function messages(){

        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório',
            'login.required' => 'O campo Login é de preenchimento obrigatório',
            'password.required' => 'O campo de senha é de preenchimento obrigatório',
        ];

    }
}
