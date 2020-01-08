<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class NewsUserStoreRequest extends FormRequest
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
            'news_id'=>'required|exists:news,id|integer',
            'user_id'=>'required|exists:users,id|integer',
            'flag'=>'required|string|max:100'
        ];
    }

    public function messages()
    {
        return[
            'flag.required'=>'Insira uma flag!',
            'news_id'=>'Associe um notícia!',
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
