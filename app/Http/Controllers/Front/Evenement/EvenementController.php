<?php

namespace App\Http\Controllers\Front\Evenement;

use App\Http\Requests\EvenementRequest;
use App\Models\Evenement;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvenementController extends Controller
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
        $events = Evenement::all();
        $event = new Evenement();
        return view('Front.Blog.index', compact('articles', 'article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Evenement();
        return view('Front.Blog.create', compact('article'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EvenementRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EvenementRequest $request)
    {

        Evenement::create($request->all());
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
        $event = Evenement::findOrFail($id);

        return view('Front.Blog.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EvenementRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EvenementRequest $request, $id)
    {
        $event = Evenement::findOrFail($id);

        $event->update($request->only('titre', 'niveau', 'description', 'heure_formation', 'image'));

        return redirect("blog/edit/{$event->id}")
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
        $event = Evenement::findOrFail($id);
        $event->delete();

        return redirect("blog")
            ->with('success', 'L\'article a bien été supprimée');
    }

}
