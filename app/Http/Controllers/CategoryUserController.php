<?php

namespace App\Http\Controllers;

use App\CategoryUser;
use Illuminate\Http\Request;

class CategoryUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CategoryUser::all();
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

        $categoryUser=CategoryUser::create($data);

        $response=[
            'message'=>'Categoria Favorita do User Adicionada',
            'data'=>$categoryUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryUser  $categoryUser
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryUser $categoryUser)
    {
        //
        return $categoryUser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryUser  $categoryUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryUser $categoryUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryUser  $categoryUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryUser $categoryUser)
    {
        //
        $data=$request->all();


        $categoryUser->update($data);

        $response=[
            'message'=>'Relação entre Categoria e Utilizador Atualizada',
            'data'=>$categoryUser,
            'result'=>'ok'
        ];
        return response($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryUser  $categoryUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryUser $categoryUser)
    {
        //
        $categoryUser->delete();
        return 'Relação entre Categoria e Utilizador Apagada';
    }
}
