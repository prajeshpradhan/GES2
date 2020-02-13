<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
