<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AuthorUserStoreRequest extends FormRequest
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
            'author_id'=>'required|exists:authors,id|integer',
            'user_id'=>'required|exists:users,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'author_id'=>'Associe um autor!',
            'user_id'=>'Associe um utilizador!'
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
