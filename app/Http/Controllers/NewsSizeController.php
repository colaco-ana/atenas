<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsSizeStoreRequest;
use App\Http\Requests\NewsSizeUpdateRequest;
use App\NewsSize;
use Illuminate\Http\Request;

class NewsSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $newsSize = NewsSize::all();

        $response=[
            'message'=>'Lista de Tamanho de Notícias',
            'data'=>$newsSize,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsSizeStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $newsSize=NewsSize::create($data);

        $response=[
            'message'=>'Tamanho de Notícia Adicionada',
            'data'=>$newsSize,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsSize  $newsSize
     * @return \Illuminate\Http\Response
     */
    public function show(NewsSize $newsSize)
    {
        //
        $response=[
            'message'=>'Autor selecionado',
            'data'=>$newsSize,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsSize  $newsSize
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsSize $newsSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsSize  $newsSize
     * @return \Illuminate\Http\Response
     */
    public function update(NewsSizeUpdateRequest $request, NewsSize $newsSize)
    {
        //
        $data=$request->all();

        $newsSize->update($data);

        $response=[
            'message'=>'Tamanho da Notícia Atualizada',
            'data'=>$newsSize,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsSize  $newsSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsSize $newsSize)
    {
        $newsSize->delete();
        $response=[
            'message'=>'Profissão Apagada',
            'data'=>$newsSize,
            'result'=>'ok'
        ];

        return response($response);
    }
}
