<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PurchaseDetails extends Model
{
    // use HasFactory;
    protected $table = "purchases_details";
    protected $primaryKey = "id";

    protected $fillable = ['service_id', 'purchase_id', 'quantity'];

    public static $rules = [
        'service_id' => 'required',
        'purchase_id' => 'required',
        'quantity' => 'required|numeric'
    ];

    public static $errorMessages = [
        'service_id.required' => 'El servicio no puede estar vacío.',
        'purchase_id.required' => 'La compra no puede estar vacía.',
        'quantity.required' => 'La cantidad de viajes es requerida.',
        'quantity.numeric' => 'La cantidad de viajes debe ser un número.'
    ];

    /**
     * Establece una relación de muchos a uno con el modelo Service.
     * @return BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'id', 'service_id');
    }

    /**
     * Establece una relación de muchos a uno con el modelo Purchase.
     * @return BelongsTo
     */
    public function purchase(): BelongsTo
    {
        return $this->belongsTo(Purchase::class, 'id', 'purchase_id');
    }
}
