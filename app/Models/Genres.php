<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'genres';

    /**
     * The attributes that are mass assignable ( Allowed to insert ).
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    protected $guarded=['id'];

}

