<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ["nombre" => "Ron", "tipo" => "alcohol", "sabor" => "dulce"],
            ["nombre" => "Ginebra", "tipo" => "alcohol", "sabor" => "amargo"],
            ["nombre" => "Vodka", "tipo" => "alcohol", "sabor" => "otro"],
            ["nombre" => "Cocacola", "tipo" => "refresco", "sabor" => "dulce"],
            ["nombre" => "Tónica", "tipo" => "refresco", "sabor" => "dulce"],
            ["nombre" => "Limón", "tipo" => "refresco", "sabor" => "acido"],
            ["nombre" => "Naranja", "tipo" => "zumo", "sabor" => "dulce"],
            ["nombre" => "Melocotón", "tipo" => "zumo", "sabor" => "dulce"],
            ["nombre" => "Menta", "tipo" => "aderezo", "sabor" => "otro"],
            ["nombre" => "Azucar", "tipo" => "aderezo", "sabor" => "dulce"],
            ["nombre" => "Hielo picado", "tipo" => "aderezo", "sabor" => "otro"],
        ];

        foreach ($ingredients as $ing) {
            Ingredient::create($ing);
        }
    }
}
