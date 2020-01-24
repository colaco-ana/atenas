<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsUserStoreRequest;
use App\Http\Requests\NewsUserUpdateRequest;
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
        $newsusers = NewsUser::all();
        $response=[
            'message'=>'Lista de relações entre Notícias e Users',
            'data'=>$newsusers,
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
    public function store(NewsUserStoreRequest $request)
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
        $response=[
            'message'=>'Relação entre Notícia e User selecionada',
            'data'=>$newsUser,
            'result'=>'ok'
        ];

        return response($response);
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
    public function update(NewsUserUpdateRequest $request, NewsUser $newsUser)
    {
        //
        $data=$request->all();

        $newsUser->update($data);

        $response=[
            'message'=>'Relação entre noticia e User Atualizada',
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
        $response=[
            'message'=>'Relação entre Notícia e User Apagada',
            'data'=>$newsUser,
            'result'=>'ok'
        ];
        return response($response);
    }
}
