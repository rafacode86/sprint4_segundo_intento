<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        return view("ingredients.index", compact("ingredients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("ingredients.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nombre" => "required|string|max:45",
            "tipo" => "required|in: alcohol, zumo, refresco, aderezo",
            "sabor" => "required|in: dulce, salado, amargo, picante, otro",
        ]);

        Ingredient::create($data);

        return redirect()->route("ingredients.index");
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
    public function edit(Ingredient $ingredient)
    {
        return view("ingredients.edit", compact("ingredient"));
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
