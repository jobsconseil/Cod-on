<?php

namespace App\Http\Controllers\Front\Collaborator;

use App\Http\Requests\ProjetRequest;
use App\Models\Projet;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class ProjetController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Projet Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projet = new Projet();
        return view('Front.Blog.create', compact('projet'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProjetRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjetRequest $request)
    {

        Projet::create($request->all());
        return redirect('blog')
            ->with('success', 'Le projet a bien été ajouté');
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
        $projet = Projet::findOrFail($id);

        return view('Front.Collaborator.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ArticleRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjetRequest $request, $id)
    {
        $projet = Projet::findOrFail($id);

        $projet->update($request->only('titre', 'niveau', 'description', 'heure_formation', 'image'));

        return redirect("admin/formation/{$projet->id}/edit")
            ->with('success', 'Le projet a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);
        $projet->delete();

        return redirect("Collaborator")
            ->with('success', 'Le projet a bien été supprimé');
    }
}
