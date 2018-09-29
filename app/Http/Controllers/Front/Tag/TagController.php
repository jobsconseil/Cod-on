<?php

namespace App\Http\Controllers\Front\Tag;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
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
        $tags = Tag::all();
        $tag = new Tag();
        return view('Front.Tag.index', compact('tags', 'tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = new Tag();
        return view('Front.Tag.create', compact('tag'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TagRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {

        Tag::create($request->all());
        return redirect('tag')
            ->with('success', 'Le tag a bien été ajouté');
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
        $tag = Tag::findOrFail($id);

        return view('Front.Tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TagRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        $tag = Tag::findOrFail($id);

        $tag->update($request->only('titre', 'niveau', 'description', 'heure_formation', 'image'));

        return redirect("blog/edit/{$tag->id}")
            ->with('success', 'Le tag a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect("tag")
            ->with('success', 'Le tag a bien été supprimé');
    }
}
