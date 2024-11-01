<?php
// agregar softDeletes
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'alumnos';
    protected $fillable = ['nombre', 'apellidos', 'email', 'edad'];
     
}
