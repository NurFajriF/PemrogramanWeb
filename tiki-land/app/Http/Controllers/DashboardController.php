<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;
class DashboardController extends Controller
{
    //
    public function index(){
        return view('user.dashboard', [
            'title'=>'Dashboard',
            // 'user' =>User::where('id', auth()->user()->id)->get(),
            
        ]);

    }
}
