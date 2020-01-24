<?php

namespace App\Http\Controllers;

use App\AuthorUser;
use App\Http\Requests\AuthorUserStoreRequest;
use App\Http\Requests\AuthorUserUpdateRequest;
use Illuminate\Http\Request;

class AuthorUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $authorsusers = AuthorUser::all();
        $response=[
            'message'=>'Lista de Autor Favoritos dos Users',
            'data'=>$authorsusers,
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
    public function store(AuthorUserStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $authorUser=AuthorUser::create($data);

        $response=[
            'message'=>'Autor Favorito do User Adicionado',
            'data'=>$authorUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AuthorUser  $authorUser
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorUser $authorUser)
    {
        //
        $response=[
            'message'=>'Autor Favorito do User selecionado',
            'data'=>$authorUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuthorUser  $authorUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorUser $authorUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuthorUser  $authorUser
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorUserUpdateRequest $request, AuthorUser $authorUser)
    {
        //

        $data=$request->all();

        $authorUser->update($data);

        $response=[
            'data'=>$authorUser,
            'message'=>'Autor Favorito do User Atualizado',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AuthorUser  $authorUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorUser $authorUser)
    {
        //
        $authorUser->delete();
        $response=[
            'message'=>'Autor Favorito do User Apagado',
            'data'=>$authorUser,
            'result'=>'ok'
        ];

        return response($response);

    }
}
