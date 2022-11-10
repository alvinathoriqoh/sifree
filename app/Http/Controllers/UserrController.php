<?php

namespace App\Http\Controllers;

// use App\Models\proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserrController extends Controller
{
    public function freelancer(){
        $users= User::where('role_id',1)->get();
        return view('data.freelancer',compact('users'));
    }

    public function perusahaan(){
        $users= User::where('role_id',2)->get();
        return view('data.perusahaan',compact('users'));
    }

    
}
            
    