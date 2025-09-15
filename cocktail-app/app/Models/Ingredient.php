<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{   
    use HasFactory;

    protected $fillable = ["nombre", "tipo", "sabor"];

    public function cocktails() {
        return $this->belongsToMany(
            Cocktail::class,
            "cocktail_ingredient",
            "id_ingrediente",
            "id_cocktail")->withTimestamps();
    }
}
