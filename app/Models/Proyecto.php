<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre
 * @property $estado
 * @property $descripcion
 * @property $fecha_inicio
 * @property $fecha_final
 * @property $lider_id
 *
 * @property User $user
 * @property Tarea[] $tareas
 * @property UsuarioProyecto[] $usuarioProyecto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = false;
    protected $fillable = ['nombre', 'estado', 'descripcion', 'fecha_inicio', 'fecha_final', 'lider_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'lider_id', 'cedula');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tareas()
    {
        return $this->hasMany(\App\Models\Tarea::class, 'id', 'proyecto_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarioProyecto()
    {
        return $this->hasMany(\App\Models\UsuarioProyecto::class, 'id', 'proyecto_id');
    }

}
