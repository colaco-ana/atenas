<?php

namespace App\Http\Controllers;

use App\CategoryPublication;
use Illuminate\Http\Request;

class CategoryPublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CategoryPublication::all();
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

        $categoryPublication=CategoryPublication::create($data);

        $response=[
            'message'=>'Relação entre Categoria e Publicação Adicionada',
            'data'=>$categoryPublication,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryPublication  $categoryPublication
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryPublication $categoryPublication)
    {
        //
        return $categoryPublication;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryPublication  $categoryPublication
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPublication $categoryPublication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryPublication  $categoryPublication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryPublication $categoryPublication)
    {
        //
        $data=$request->all();


        $categoryPublication->update($data);

        $response=[
            'message'=>'Relação entre Categoria e Publicação Atualizada',
            'data'=>$categoryPublication,
            'result'=>'ok'
        ];
        return response($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryPublication  $categoryPublication
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryPublication $categoryPublication)
    {
        //
        $categoryPublication->delete();
        return 'Relação entre Categoria e Publicação Apagada';
    }
}
