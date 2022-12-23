<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;

    public function reservation(){
        return $this->hasMany(Resevation::class);
    }

    public function Room(){
        return $this->hasMany(Room::class);
    }
}
