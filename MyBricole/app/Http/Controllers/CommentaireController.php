<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaires = Commentaire::all();
        return view('commentairs.index',compact('commentaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('commentairs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $request->validate([
            'commentaire'=>'required',
        ]);

        $data = new Commentaire();
        $data->bricole_id = $request->bricole_id;
        $data->user_id = Auth::user()->id;
        $data->commentaire = $request->commentaire;
        $data->save();
        return redirect()->back()->with('success', 'commentaire successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commentaire = commentaire::find($id);
        return view('commentairs.show',compact('commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
