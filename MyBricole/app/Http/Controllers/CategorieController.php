<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categorie::all();
        return view('categorie.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->nom);

        $request->validate([
            'nom' => 'required',
        ]);
        $data = new categorie();

        $data->nom = $request->nom;
        $data->save();
       return redirect('admin/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $categorie= categorie::find($request->id);
        $bricoles = $categorie->bricoles;
        return view('categorie.show', compact('categorie', 'bricoles'));
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $categorie= categorie::find($request->id);
        return view('admin/dashboard', compact('categorie'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categorie $categorie)
    {
        $request->validate([
            'nom' => 'required',
        ]);
    
        $categorie->nom = $request->nom;
        $categorie->save();
    
        return redirect()->route('admin/dashboard')->with('success', 'Category updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Categorie::destroy($request->id);
        return redirect()->route('admin/dashboard')->with('success', 'Category deleted successfully.');
    }
    
}
