<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class SearchStoreRequest extends FormRequest
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
            'text'=>'required|unique:searches|string|max:255',
            'image'=>'required|image',
            'user_id'=>'required|exists:users,id|integer',
            'search_type_id'=>'required|exists:search_types,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'text.required'=>'Insira um texto!',
            'image.required'=>'Insira uma imagem válida!',
            'user_id'=>'Associe um utilizador!',
            'search_type_id'=>'Associe um tipo de pesquisa!',
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
