<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Flore
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Flore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','imagen'];



}
