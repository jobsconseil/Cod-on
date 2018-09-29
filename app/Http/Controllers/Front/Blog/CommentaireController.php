<?php

namespace App\Http\Controllers\Front\Blog;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\Response_CommentRequest;
use App\Models\Comment;
use App\Models\Response_Comment;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class CommentaireController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Commentaire Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CommentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {

        Comment::create($request->all());
        return redirect('blog')
            ->with('success', 'Le Commentaire a bien été ajouté');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CommentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, $id)
    {
        $comment = Comment::findOrFail($id);

        $comment->update($request->only('titre', 'niveau', 'description', 'heure_formation', 'image'));

        return redirect("admin/formation/{$comment->id}/edit")
            ->with('success', 'Le Commentaire a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect("blog")
            ->with('success', 'Le Commentaire a bien été supprimé');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Response_CommentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store_rc(Response_CommentRequest $request)
    {

        Response_Comment::create($request->all());
        return redirect('blog')
            ->with('success', 'Le Commentaire a bien été ajouté');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CommentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_rc(Response_CommentRequest $request, $id)
    {
        $reponse = Response_Comment::findOrFail($id);

        $reponse->update($request->only('titre', 'niveau', 'description', 'heure_formation', 'image'));

        return redirect("admin/formation/{$reponse->id}/edit")
            ->with('success', 'Le Commentaire a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_rc($id)
    {
        $reponse = Response_Comment::findOrFail($id);
        $reponse->delete();

        return redirect("blog")
            ->with('success', 'Le Commentaire a bien été supprimé');
    }

}
