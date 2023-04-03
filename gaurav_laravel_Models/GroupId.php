<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class GroupId extends Model
{
    protected $guarded =[];
    protected $table = 'GroupIds';

    public function groupImg(){
        return $this->belongsTo('App\Models\PostMedia', 'id','group_id');
    }

    public function Img(){
        return $this->belongsTo('App\Models\PostMedia','id','media_url')->with('Img');
    }
}
?>