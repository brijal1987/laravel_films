<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'films';

    /**
     * The attributes that are mass assignable ( Allowed to insert ).
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'rating','price','country','photo','slug'
    ];

    protected $guarded=['id'];



    /**
     * Relationship: comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }



}
