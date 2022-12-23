<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Reservation;
use App\Models\RoomCategory;
use App\Models\Room;

class ReservationController extends Controller
{
    //
    public function create(){
        return view('reservation', [
            'title'=> 'Reservation',
            'roomcategories'=>RoomCategory::all(),
            'rooms'=>Room::all(),
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'room_id'=>'required',
            'phone'=>'required|max:255',
            'address'=>'required|max:255',
        ]);

        Reservation::create($validatedData);
        if(!$validatedData){
            $this->$request->session()->flash('error', 'Reservation failed!');
        }
        
        return redirect('/dashboard')->with('success', 'Reservation is successful, please check-in according the date');
    }
}
