<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategorieController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        $categorie = new Categorie();
        return view('Front.Blog.index', compact('articles', 'article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = new Categorie();
        return view('Front.Blog.create', compact('article'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CategorieRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {

        Categorie::create($request->all());
        return redirect('blog')
            ->with('success', 'L\'article a bien été ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);

        return view('Front.Blog.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CategorieRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request, $id)
    {
        $categorie = Categorie::findOrFail($id);

        $categorie->update($request->only('titre', 'niveau', 'description', 'heure_formation', 'image'));

        return redirect("blog/edit/{$categorie->id}")
            ->with('success', 'L\'article a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return redirect("blog")
            ->with('success', 'L\'article a bien été supprimée');
    }
}
