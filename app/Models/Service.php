<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // use HasFactory;

    protected $table = "services";
    protected $primaryKey = "id";

    protected $fillable = ['title', 'description', 'image', 'price', 'duration', 'content_type'];

    public static $rules = [
        'title' => 'required|min:3',
        'description' => 'required|min:3',
        'image' => 'required|min:3',
        'price' => 'required|min:3',
        'duration' => 'required|min:3',
        'content_type' => 'required|min:3'
    ];

    public static $errorMessages = [
        'title.required' => 'El título no puede estar vacío.',
        'title.min' => 'El título debe tener al menos :min caracteres.',
        'description.required' => 'La descripción es requerida.',
        'description.min' => 'La descripción debe tener al menos :min caracteres.',
        'image.required' => 'La imagen es requerida.',
        'image.min' => 'La imagen debe tener al menos :min caracteres.',
        'price.required' => 'El precio es requerido.',
        'price.min' => 'El precio debe tener al menos :min caracteres.',
        'duration.required' => 'La duración es requerida.',
        'duration.min' => 'La duración debe tener al menos :min caracteres.',
        'content_type.required' => 'El tipo de contenido es requerido.',
        'content_type.min' => 'El tipo de contenido debe tener al menos :min caracteres.'
    ];
}
