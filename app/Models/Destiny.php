<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destiny extends Model
{
    // use HasFactory;
    protected $table = "destinations";
    protected $primaryKey = "id";

    protected $fillable = ['name'];

    public static $rules = [
        'name' => 'required|min:3'
    ];

    public static $errorMessages = [
        'name.required' => 'El destino no puede estar vacío.',
        'name.min' => 'El destino debe tener al menos :min caracteres.',
    ];
}
