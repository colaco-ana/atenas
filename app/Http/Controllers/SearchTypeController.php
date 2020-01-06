<?php

namespace App\Http\Controllers;

use App\SearchType;
use Illuminate\Http\Request;

class SearchTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return SearchType::all();
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SearchType  $searchType
     * @return \Illuminate\Http\Response
     */
    public function show(SearchType $searchType)
    {
        //
        return $searchType;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SearchType  $searchType
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchType $searchType)
    {
        //
        return $searchType;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SearchType  $searchType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SearchType $searchType)
    {
        //
        $data=$request->all();

        $searchType->update($data);

        $response=[
            'message'=>'Tipo de Procura Atualizada',
            'data'=>$searchType,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SearchType  $searchType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchType $searchType)
    {
        /*
        $searchType->delete();
        return 'deleted';*/
    }
}
