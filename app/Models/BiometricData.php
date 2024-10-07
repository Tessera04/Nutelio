<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiometricData extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'paciente_id',
        'height',
        'weight',
        'body_fat_percentage',
        'muscle_mass_percentage',
        'waist_circumference',
        'hip_circumference',
        'chest_circumference',
        'gender'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id'); // 'id' es la columna de referencia en la tabla de pacientes
    }
}
