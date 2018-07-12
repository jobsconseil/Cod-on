<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'libelle'  => 'required|unique:subjects,libelle',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'libelle.required'  => 'Le libelle est obligatoire',
            'libelle.unique'  =>    'Ce libelle est deja utiliser',
            'description.required'  => 'La description est obligatoire'
        ];
    }
}
