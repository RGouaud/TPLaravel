<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{ Protected $primaryKey=’NumeroClient’;
Protected $fillabe=[‘numeroClient’,’nom’,’email’,’carteBancaire’];
public function reservation() {return $this->hasMany(‘App\reservation);}
}

