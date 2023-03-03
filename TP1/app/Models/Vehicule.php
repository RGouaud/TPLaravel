<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicule extends Model {
    Protected $primaryKey='matricule';
    Protected $fillabe = ['matricule', 'model','nombrePlace','prix','disponible'];
    public function vehicule() {
    return $this->belongsToMany('App\vehicule');}
    }
    