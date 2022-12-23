<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    public function reservation(){
        return $this->hasMany(Resevation::class);
    }

    public function RoomCategory(){
        return $this->belongsTo(RoomCategory::class);
    }
}
