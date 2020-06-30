<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function ShowDashboard($id){
        $user=User::all()->find($id);
        return view("Profiles.dashboard")->with('user',$user);
    }
}
