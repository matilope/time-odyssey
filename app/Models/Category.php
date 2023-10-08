<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "id";

    protected $fillable = ['name'];

    public static $rules = [
        'name' => 'required|min:3'
    ];

    public static $errorMessages = [
        'name.required' => 'El nombre de la categoría no puede estar vacío.',
        'name.min' => 'El nombre de la categoría debe tener al menos :min caracteres.',
    ];
}
