<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class AuthorStoreRequest extends FormRequest
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
            //
            'name'=>'required|unique:authors|string|max:100',
            'description'=>'required|string|max:255',
            'email'=>'required|email|unique:authors,email',
            'job_id'=>'required|exists:jobs,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Insira um nome!',
            'description.required'=>'Insira uma descrição do autor!',
            'email.required'=>'Insira um endereço de email válido!',
            'job_id'=>'Associe um trabalho!'
        ];
    }

    protected  function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'data'=>$validator->errors(),
                    'msg'=>'Erro de validação.'
                ],  422));
    }
}


