<?php

namespace App\Http\Controllers;

use App\Models\bricole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BricoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bricoles = bricole::all();
        return view('bricole.index',compact('bricoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bricole.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie' => 'required',
            'description' => 'required',
            'date_de_creation' => 'required|date'
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $data = new bricole();
        $data->nom = $request->nom;
        $data->image = $imageName;
        $data->categorie = $request->categorie;
        $data->description = $request->description;
        $data->date_de_creation = $request->date_de_creation;
        $data->bricoleurs_id = Auth::user()->id;
        
        $data->save();

        return redirect()->back()->with('success','Item created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bricole = Bricole::find($id);
        return view('bricole.edit', compact('bricole'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie' => 'required',
            'description' => 'required',
            'date_de_creation' => 'required|date'
        ]);
        
        $data = bricole::find($id);
        $data->nom = $request->nom;
        
        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $data->image = $imageName;
        }
        $data->categorie = $request->categorie;
        $data->description = $request->description;
        $data->date_de_creation = $request->date_de_creation;
        $data->save();
        return redirect('/bricole');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
