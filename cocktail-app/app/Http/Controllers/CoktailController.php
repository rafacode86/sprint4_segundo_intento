<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class CoktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::with("ingredients")->get();
        return view("cocktails.index", compact("cocktails"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        return view("cocktails.create", compact("ingredients"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nombre"     => "required|string|max:60",
            "origen"     => "required|string|max:40",
            "alcoholico" => "required|boolean",
            "ingredients" => "array",
            "ingredients.*" => "exists:ingredients,id",
        ]);

        $cocktail = Cocktail::create([
            "nombre" => $data["nombre"],
            "origen" => $data["origen"],
            "alcoholico" => $data["alcoholico"],
        ]);

        if (isset($data["ingredients"])) {
            $cocktail->ingredients()->attach($data["ingredients"]);
        }

        return redirect()->route("cocktail.index");
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
