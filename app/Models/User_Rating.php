<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Rating extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_rating';

    /**
     * The attributes that are mass assignable ( Allowed to insert ).
     *
     * @var array
     */
    protected $fillable = [
        'rating'
    ];
}
