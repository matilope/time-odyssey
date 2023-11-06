<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Service
 *
 * @property int $id
 * @property string $description
 * @property string|null $image
 * @property int $price
 * @property int $duration
 * @property int $lodging
 * @property string $date_of_departure
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $destiny_id
 * @property-read \App\Models\Destiny $destiny
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDateOfDeparture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDestinyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereLodging($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
        'price' => 'required|numeric',
        'duration' => 'required|numeric',
        'lodging' => 'required|numeric',
        'date_of_departure' => 'required'
    ];

    public static $errorMessages = [
        'destiny_id.required' => 'El destino no puede estar vacío.',
        'description.required' => 'La descripción es requerida.',
        'description.min' => 'La descripción debe tener al menos :min caracteres.',
        'image.required' => 'La imagen es requerida.',
        'price.required' => 'El precio es requerido.',
        'price.numeric' => 'El precio debe ser un número.',
        'duration.required' => 'La duración es requerida.',
        'duration.numeric' => 'El duración debe ser un número.',
        'lodging.required' => 'El tiempo de alojamiento es requerido.',
        'lodging.numeric' => 'El tiempo de alojamiento debe ser un número.',
        'date_of_departure.required' => 'La fecha de salida es requerida.'
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
     * Establece una relación de uno a muchos con el modelo Destiny.
     * @return BelongsTo
    */
    public function destiny(): BelongsTo
    {
        return $this->belongsTo(Destiny::class, 'destiny_id', 'id');
    }
}
