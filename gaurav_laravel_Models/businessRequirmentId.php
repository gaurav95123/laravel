<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class businessRequirmentId extends Model
{
    protected $guarded =[];
    protected $table = 'businessRequirmentIds';

    public function user_details(){
        return $this->belongsTo('App\Models\User','userId','id');
    }

    public function comments(){
        return $this->hasOne('App\Models\Commentbusinessrequirement','requirment_id','id');
    }
}
?>