<?php

namespace App\Http\Controllers;

use App\CategoriesProduct;
use App\CategoriesService;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // On regarde si la catégorie qui vient d'être ajoutée est une catégorie de Services traiteur ou de Produits
        $category = ($request->category_type = 'service') ? new CategoriesService() : new CategoriesProduct();
        
        // On peuple l'objet avec les bonnes valeurs avant de le sauvegarder en BDD
        // @TODO : Créer un __construct dans les models CatService et Service pour pouvoir peupler l'objet uniquement de cette manière : new CatService($request); 
        $category->name = $request->get('name'); 
        $category->description = $request->get('description');
        $category->category_type = $request->get('category_type');
        $category->id_parent = $request->get('id_parent');
        $category->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CatProduct  $catProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CatProduct $catProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CatProduct  $catProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CatProduct $catProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CatProduct  $catProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatProduct $catProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CatProduct  $catProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatProduct $catProduct)
    {
        //
    }
}
