<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealers extends Model
{
    protected $table = 'dealers';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function users(){
        return $this->belongsTo('App\User');
    }
}
