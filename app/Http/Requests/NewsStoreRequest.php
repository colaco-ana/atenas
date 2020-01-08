<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class NewsStoreRequest extends FormRequest
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
            'title'=>'required|unique:news|string|max:200',
            'image'=>'required|image',
            'url'=>'required|string|unique:news',
            'subtitle'=>'required|unique:news|string|max:300',
            'news_size_id'=>'required|exists:news_sizes,id|integer',
            'category_id'=>'required|exists:categories,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Insira um titulo!',
            'image.required'=>'Insira uma imagem!',
            'url.required'=>'Insira um url válido!',
            'subtitle.required'=>'Insira um titulo!',
            'news_size_id'=>'Associe um tamanho de notícia!',
            'category_id'=>'Associe uma categoria de notícia!'

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
