<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectionFilm extends Model
{
    use HasFactory;
    protected $table = 'projectionfilm';
    protected $fillable = [
        'movie_id',
        'projection_datetime',
        'salle_id',
    ];
}
