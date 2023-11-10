<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombre
 * @property $pe_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Pe $pe
 * @property Registro[] $registros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'pe_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','pe_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pe()
    {
        return $this->hasOne('App\Models\Pe', 'id', 'pe_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registros()
    {
        return $this->hasMany('App\Models\Registro', 'docente_id', 'id');
    }
    

}
