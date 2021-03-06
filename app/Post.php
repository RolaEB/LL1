<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use Sluggable;
    //
    public function sluggable()
{
    return [
        'slug' => [
            'source' => 'title'
        ]
    ];
}
    

    protected $fillable = [
        'title',
        'description',
        'user_id',
        
    ];
    public function user()
    {
        //User::class == 'App\User'
        return $this->belongsTo(User::class);
    }
}
