<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::all();
        $response=[
            'message'=>'Lista de Notícias',
            'data'=>$news,
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
    public function store(NewsStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post
        $file=$request->file('image')->store('images/news');
        //return $file;
        $data['image']=$file;

        $news=News::create($data);


        $response=[
            'message'=>'Notícia Adicionada',
            'data'=>$news,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
        $response=[
            'message'=>'Notícia selecionada',
            'data'=>$news,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdateRequest $request, News $news)
    {
        //
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image')->store('images/news');

            $data['image']=$file;

        }

        $news->update($data);

        $response=[
            'message'=>'Notícia Atualizada',
            'data'=>$news,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
        $news->delete();
        $response=[
            'message'=>'Notícia Apagada',
            'data'=>$news,
            'result'=>'ok'
        ];

        return response($response);
    }
}
