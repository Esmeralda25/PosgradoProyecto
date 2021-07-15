<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesgloceEvaluacion extends Model
{
    protected $table = 'DesgloceEvaluaciones';
    protected $fillable=['evaluaciones_id','docentes_id','concepto','valor','observacion'];
    public $timestamps = false;
}
