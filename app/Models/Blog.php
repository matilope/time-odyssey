<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $image
 * @property string|null $synopsis
 * @property string $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSynopsis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Blog extends Model
{
    // use HasFactory; 

    protected $table = "blogs";
    protected $primaryKey = "id";

    protected $fillable = ['title', 'description', 'image', 'synopsis', 'category'];

    public static $rules = [
        'title' => 'required|min:3',
        'description' => 'required|min:3',
        'category' => 'required'
    ];

    public static $errorMessages = [
        'title.required' => 'El título no puede estar vacío.',
        'title.min' => 'El título debe tener al menos :min caracteres.',
        'description.required' => 'La descripción es requerida.',
        'description.min' => 'La descripción debe tener al menos :min caracteres.',
        'category.required' => 'La categoría es requerida.'
    ];
}
