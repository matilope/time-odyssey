<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Purchase extends Model
{
    // use HasFactory;

    protected $table = "purchases";
    protected $primaryKey = "id";

    protected $fillable = ['user_id', 'service_id', 'price', 'quantity'];

    public static $rules = [
        'user_id' => 'required',
        'service_id' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric'
    ];

    public static $errorMessages = [
        'user_id.required' => 'El usuario no puede estar vacío.',
        'service_id.required' => 'El servicio no puede estar vacío.',
        'price.required' => 'El precio es requerido.',
        'price.numeric' => 'El precio debe ser un número.',
        'quantity.required' => 'La cantidad de viajes es requerida.',
        'quantity.numeric' => 'La cantidad de viajes debe ser un número.'
    ];

    /**
     * El set lo guarda en centavos
     * El get lo divide por 100 para que no sean centavos
     * @return Attribute
     */
    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100
        );
    }

    /**
     * Establece una relación de muchos a uno con el modelo User.
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Establece una relación de muchos a uno con el modelo Service.
     * @return BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
