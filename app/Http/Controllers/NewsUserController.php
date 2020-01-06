<?php

namespace App\Http\Controllers;

use App\NewsUser;
use Illuminate\Http\Request;

class NewsUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return NewsUser::all();
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

        $newsUser=NewsUser::create($data);

        $response=[
            'message'=>'Relação entre Notícia e User Adicionada',
            'data'=>$newsUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsUser  $newsUser
     * @return \Illuminate\Http\Response
     */
    public function show(NewsUser $newsUser)
    {
        //
        return $newsUser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsUser  $newsUser
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsUser $newsUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsUser  $newsUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsUser $newsUser)
    {
        //
        $data=$request->all();

        $newsUser->update($data);

        $response=[
            'message'=>'Relação entre noticia e Utilizador Atualizada',
            'data'=>$newsUser,
            'result'=>'ok'
        ];
        return response($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsUser  $newsUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsUser $newsUser)
    {
        //
        $newsUser->delete();
        return 'deleted';
    }
}
