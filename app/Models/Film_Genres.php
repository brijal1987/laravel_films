<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film_Genres extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'film_genres';

    /**
     * The attributes that are mass assignable ( No thing allowed to insert ).
     *
     * @var array
     */
    protected $fillable = [];
}
