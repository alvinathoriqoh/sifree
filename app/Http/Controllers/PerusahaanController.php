<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StorePerusahaanRequest;
// use App\Http\Requests\UpdatePerusahaanRequest;
use App\Models\Perusahaan;
use App\Models\Proyek;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Gate;
// use Symfony\Component\HttpFoundation\Response;
use Auth;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(){
        //  $proyek= proyek()->user_id;
         $user=User::where("id",'user_id');
        //  return view('perusahaan',compact('users'));
         return view('perusahaan',['users'=>$user]);
        // $proyek = Proyek::where('user_id',$user)->orderBy('id','DESC')->get();
        // return view('perusahaan',compact('proyek'));
        // $users =User::all();
        // return view('perusahaan',compact('users'));
     }
     public function detail($id){
       
        $users = User::findOrFail(decrypt($id));
        return view('perusahaan',compact('users'));
    }
    
}