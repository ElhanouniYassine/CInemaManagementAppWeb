<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectionFilm;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movie';
    protected $fillable = [
        'title',
        'director',
        'release_year',
        'genre',
        'background_image',
        'story',
    ];
    public function projections()
    {
        return $this->hasMany(ProjectionFilm::class);
    }
}
