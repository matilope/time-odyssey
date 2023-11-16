<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * App\Models\Purchase
 *
 * @property int $id
 * @property int $user_id
 * @property int $service_id
 * @property string $service_name
 * @property int $price
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $service
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase query()
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereServiceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Purchase whereUserId($value)
 * @mixin \Eloquent
 */
class Purchase extends Model
{
  // use HasFactory;

  protected $table = "purchases";
  protected $primaryKey = "id";

  protected $fillable = ['user_id', 'service_id', 'service_name', 'price', 'quantity'];

  public static $rules = [
    'user_id' => 'required',
    'quantity' => 'required|numeric'
  ];

  public static $errorMessages = [
    'user_id.required' => 'El usuario no puede estar vacío.',
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
