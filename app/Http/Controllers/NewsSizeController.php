<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsSizeStoreRequest;
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
        return NewsSize::all();
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
        return $newsSize;
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
    public function update(NewsSizeStoreRequest $request, NewsSize $newsSize)
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
        //
        /*$newsSize->delete();
        return 'deleted';*/
    }
}
