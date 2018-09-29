<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name'  => 'required',
            'bio' => 'required',
            'location' => 'required',
            'jobs' => 'required',
            'recuperationEmail' => 'required|unique:members,Email'
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Le nom est obligatoire',
            'nom.unique'  =>    'Ce nom est deja utiliser',
            'bio.required' =>  'La bio est obligatoire',
            'location.required' =>  'location est obligatoire',
            'jobs.required' =>  'Jobs est obligatoire',
            'RecuperationEmail.unique' =>  'Ce mail existe deja',
        ];
    }

}
