<?php

namespace App\Http\Controllers;

use App\NewsTopic;
use Illuminate\Http\Request;

class NewsTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return NewsTopic::all();
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
    public function store(Request $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $newsTopic=NewsTopic::create($data);

        $response=[
            'message'=>'Relação entre Tópico e Notícia Adicionada',
            'data'=>$newsTopic,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsTopic  $newsTopic
     * @return \Illuminate\Http\Response
     */
    public function show(NewsTopic $newsTopic)
    {
        //
        return $newsTopic;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsTopic  $newsTopic
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsTopic $newsTopic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsTopic  $newsTopic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsTopic $newsTopic)
    {
        //
        $data=$request->all();

        $newsTopic->update($data);

        $response=[
            'message'=>'Relação entre Tópico e Noticia Atualizada',
            'data'=>$newsTopic,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsTopic  $newsTopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsTopic $newsTopic)
    {
        //
        $newsTopic->delete();
        return 'Relação entre Tópico e Noticia Apagada';

    }
}
