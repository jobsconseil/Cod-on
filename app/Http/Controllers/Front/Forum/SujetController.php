<?php

namespace App\Http\Controllers\Front\Forum;

use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class SujetController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Sujet Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sujets = Subject::all();
        $sujet = new Subject();
        return view('Front.Forum.index', compact('sujets', 'sujet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sujet = new Subject();
        return view('Front.Forum.create', compact('sujet'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SubjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectRequest $request)
    {

        Subject::create($request->all());
        return redirect('forum')
            ->with('success', 'Le sujet a bien été ajouté');
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
        $sujet = Subject::findOrFail($id);

        return view('Front.Forum.edit', compact('sujet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SubjectRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectRequest $request, $id)
    {
        $sujet = Subject::findOrFail($id);

        $sujet->update($request->only('titre', 'niveau', 'description', 'heure_formation', 'image'));

        return redirect("forum/edit/{$sujet->id}")
            ->with('success', 'Le sujet a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sujet = Subject::findOrFail($id);
        $sujet->delete();

        return redirect("forum")
            ->with('success', 'Le sujet a bien été supprimé');
    }


}
