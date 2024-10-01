<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'province',
        'location',
        'address',
        'dni',
        'user_id'
    ];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'province'); // 'provincia_id' es la columna de referencia en la tabla de usuarios
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id'); // 'id' es la columna de referencia en la tabla de users
    }
}
