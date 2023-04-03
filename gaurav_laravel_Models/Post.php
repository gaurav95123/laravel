<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;
    protected $guarded =[];
    // protected $table = 'posts';

    public function PostsImg(){
        return $this->belongsTo('App\Models\PostMedia', 'id', 'post_id');
    }

}

?>