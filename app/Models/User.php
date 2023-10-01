<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // use HasFactory; 

    protected $table = "users";
    protected $primaryKey = "id";

    protected $fillable = ['username', 'email', 'password', 'description', 'profile_picture'];

    public static $rules = [
        'username' => 'required|min:3',
        'email' => 'required|min:3',
        'password' => 'required'
    ];

    public static $errorMessages = [
        'username.required' => 'El usuario no puede estar vacío.',
        'username.min' => 'El usuaraio debe tener al menos :min caracteres.',
        'email.required' => 'El correo es requerido.',
        'email.min' => 'El correo debe tener al menos :min caracteres.',
        'password.required' => 'La contraseña es requerida.'
    ];
}
