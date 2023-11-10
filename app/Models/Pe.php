<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pe
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Docente[] $docentes
 * @property Grupo[] $grupos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pe extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docentes()
    {
        return $this->hasMany('App\Models\Docente', 'pe_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grupos()
    {
        return $this->hasMany('App\Models\Grupo', 'pe_id', 'id');
    }
    

}
