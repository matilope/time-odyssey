<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Destiny
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Destiny newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Destiny newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Destiny query()
 * @method static \Illuminate\Database\Eloquent\Builder|Destiny whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destiny whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destiny whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Destiny whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
