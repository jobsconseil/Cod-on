<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\ThemeRequest;
use App\Models\Theme;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
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
        $themes = Theme::all();
        $theme = new Theme();
        return view('Front.Blog.index', compact('themes', 'theme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theme = new Theme();
        return view('Front.Blog.create', compact('theme'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ThemeRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThemeRequest $request)
    {

        Theme::create($request->all());
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
        $theme = Theme::findOrFail($id);

        return view('Front.Blog.edit', compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ThemeRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThemeRequest $request, $id)
    {
        $theme = Theme::findOrFail($id);

        $theme->update($request->only('titre', 'niveau', 'description', 'heure_formation', 'image'));

        return redirect("blog/edit/{$theme->id}")
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
        $theme = Theme::findOrFail($id);
        $theme->delete();

        return redirect("blog")
            ->with('success', 'L\'article a bien été supprimée');
    }
}
