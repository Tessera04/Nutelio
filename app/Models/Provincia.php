<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_name',
    ];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'province');
    }
}
