<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemeRequest extends FormRequest
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
            'libelle'  => 'required|unique:theme,libelle',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'libelle.unique'  => 'Ce theme existe deja ',
            'libelle.required'  => 'Le libelle est obligatoire ',
            'description.required'  =>    'La description est obligatoire'
        ];
    }
}
