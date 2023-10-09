<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    // use HasFactory;

    protected $table = "services";
    protected $primaryKey = "id";

    protected $fillable = ['destiny_id', 'description', 'image', 'price', 'duration', 'lodging', 'date_of_departure'];

    public static $rules = [
        'destiny_id' => 'required',
        'description' => 'required|min:10',
        'image' => 'required',
        'price' => 'required',
        'duration' => 'required',
        'lodging' => 'required',
        'date_of_departure' => 'required'
    ];

    public static $errorMessages = [
        'destiny_id.required' => 'El destino no puede estar vacío.',
        'description.required' => 'La descripción es requerida.',
        'description.min' => 'La descripción debe tener al menos :min caracteres.',
        'image.required' => 'La imagen es requerida.',
        'price.required' => 'El precio es requerido.',
        'duration.required' => 'La duración es requerida.',
        'lodging.required' => 'El tiempo de alojamiento es requerido.',
        'date_of_departure.required' => 'La fecha de salida es requerida.'
    ];

    public function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100
        );
    }

    public function destiny(): BelongsTo
    {
        return $this->belongsTo(Destiny::class, 'destiny_id', 'id');
    }
}
