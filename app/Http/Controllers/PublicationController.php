<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationStoreRequest;
use App\Http\Requests\PublicationUpdateRequest;
use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publications = Publication::all();
        $response = [
            'message' => 'Lista de publicações',
            'data' => $publications,
            'result' => 'ok'
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationStoreRequest $request)
    {
        //
        $data = $request->all(); //array com as informações q mandar por post

        $publication = Publication::create($data);

        $response = [
            'message' => 'Publicação Adicionada',
            'data' => $publication,
            'result' => 'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
        $response = [
            'message' => 'Publicação selecionada',
            'data' => $publication,
            'result' => 'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Publication $publication
     * @return \Illuminate\Http\Response
     */
    public function update(PublicationUpdateRequest $request, Publication $publication)
    {
        //
        $data = $request->all();

        $publication->update($data);

        $response = [
            'message' => 'Publicação Atualizada',
            'data' => $publication,
            'result' => 'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        //
        $publication->delete();
        $response = [
            'message' => 'Publicação Apagada',
            'data' => $publication,
            'result' => 'ok'
        ];
        return response($response);
    }
}
