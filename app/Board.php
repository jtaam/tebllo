<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model{

    protected $guarded = ['name',];

    public function user(){
        return $this->belongsTo(User::class);
    }
}