<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Category::all();
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
    public function store(CategoryStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $file=$request->file('image')->store('images/categories');
        //return $file;
        $data['image']=$file;

        $category=Category::create($data);

        $response=[
            'message'=>'Categoria Adicionada',
            'data'=>$category,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryStoreRequest $request, Category $category)
    {
        //
        $data=$request->all();

        if($request->hasFile('image')){
             $file=$request->file('image')->store('images/categories');

             $data['image']=$file;

        }

        $category->update($data);

        $response=[
            'message'=>'Categoria Atualizada',
            'data'=>$category,
            'result'=>'ok'
        ];
        return response($response);
    }

    public function destroy(Category $category)
    {
        //
        $category->delete();
        return 'Categoria Apagada';
    }
}