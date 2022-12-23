<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'room_id',
        'ref_no',
        'phone',
        'address',
        'status',
        'date_in',
        'dateout',
    ];

    protected $hidden = [
        'ref_no',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }
}
