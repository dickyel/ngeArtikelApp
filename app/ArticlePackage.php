<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticlePackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','slug','image','material','author'
    ];
    protected $hidden = [

    ];

    
}
