<?php

namespace App\Http\Controllers;

use App\CategoryPublication;
use App\Http\Requests\CategoryPublicationStoreRequest;
use App\Http\Requests\CategoryPublicationUpdateRequest;
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
        $categoryPublications = CategoryPublication::all();
        $response=[
            'message'=>'Lista de ligações das categorias às publicações',
            'data'=>$categoryPublications,
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
    public function store(CategoryPublicationStoreRequest $request)
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
        $response=[
            'message'=>'Ligação selecionada',
            'data'=> $categoryPublication,
            'result'=>'ok'
        ];

        return response($response);
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
    public function update(CategoryPublicationUpdateRequest $request, CategoryPublication $categoryPublication)
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
        $response=[
            'message'=>'Relação entre Categoria e Publicação Apagada',
            'data'=>$categoryPublication,
            'result'=>'ok'
        ];

        return response($response);
    }
}
