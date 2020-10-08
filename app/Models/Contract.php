<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    public function aclients(){
        return $this->belongsToMany('App\Models\Aclient','aclient_contract','contract_id','aclient_id');
    }
}
