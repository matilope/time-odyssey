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

    protected $fillable = ['user_id', 'price'];

    public static $rules = [
        'user_id' => 'required',
        'price' => 'required|numeric'
    ];

    public static $errorMessages = [
        'user_id.required' => 'El usuario no puede estar vacío.',
        'price.required' => 'El precio es requerido.',
        'price.numeric' => 'El precio debe ser un número.'
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
     * Establece una relación de muchos a uno con el modelo Service.
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
