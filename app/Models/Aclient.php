<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aclient extends Model
{
    use HasFactory;

    public function contracts(){
        return $this->belongsToMany('App\Models\Contract','aclient_contract','aclient_id','contract_id');
    }
}
