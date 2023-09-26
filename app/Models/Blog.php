<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // use HasFactory; 

    protected $table = "blogs";
    protected $primaryKey = "id";

    protected $fillable = ['title', 'description', 'image', 'synopsis', 'updated_at', 'created_at'];

    public static $rules = [
        'title' => 'required|min:3',
        'description' => 'required',
        'image' => 'required'
    ];

    public static $errorMessages = [
        'title.required' => 'El título no puede estar vacío.',
        'title.min' => 'El título debe tener al menos :min caracteres.',
        'description.required' => 'La descripción es requerida.',
        'image.required' => 'La imagen es requerida.'
    ];
}
