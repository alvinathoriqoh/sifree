<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //enable disable user
    public function index()
    {
        $users = User::all();
        return view('admin.index', ['users' => $users]);
    }

    public function data()
    {
        $users = User::all();
        return view('admin.aksi', ['users' => $users]);
    }

    public function status($id){
        $users=\DB::table('users')->where('id', $id)->first();

        $status_sekarang = $users->status;

        if($status_sekarang == 1){
            \DB::table('users')->where('id', $id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('users')->where('id', $id)->update([
                'status'=>1
            ]);
        }
        \Session::flash('sukses', 'Status Berhasil Diubah');
        return redirect('admin/users');
    }


    //register admin
    public function regis(){
        $users= User::where('role_id',3)->get();
        return view('admin.regisadmin',compact('users'));
    }

    public function tambah(){
        $users = User::all();
        return view('admin.input', compact('users'));
        }

    public function simpan(Request $request){
            $data=new User;
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['password']=$request->password;
            $data['jabatan']=$request->jabatan;
            $data['role_id']=$request->role_id;
            $data->save();
        
        return redirect('admin/regis/');
    }

    //acc proyek
    public function indexx()
    {
        $proyek = Proyek::all();
        return view('admin.acc', ['proyek' => $proyek]);
        
        // $freelancer= Freelancer::all();
        // return view('freelancer.data', ['freelancer' => $freelancer]);
    }

    public function acc($id){
        $proyek=\DB::table('proyek')->where('id', $id)->first();

        $approve = $proyek->status;

        if($approve == 1){
            \DB::table('proyek')->where('id', $id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('proyek')->where('id', $id)->update([
                'status'=>1
            ]);
        }
        \Session::flash('sukses', 'Status Berhasil Diubah');
        return redirect('admin/acc');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $proyek = Proyek::all();
    //     return view('admin.freelancer.create')
    //     ->with([
    //         'proyek' => $proyek,
    //     ]);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     DB::table('freelancer')->insert(
    //         ['nama'=>$request->nama,
    //         'NIK'=>$request->NIK,
    //         'tgl_lahir'=>$request->tgl_lahir,
    //         'alamat_asal'=>$request->alamat_asal, 
    //         'alamat_domisili'=>$request->alamat_domisili, 
    //         'pendidikan'=>$request->pendidikan,
    //         'history'=>$request->history,
    //      ]);
    //      return redirect('admin.freelancer /edit');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Freelancer  $freelancer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Freelancer $freelancer)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Freelancer  $freelancer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Freelancer $freelancer)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Freelancer  $freelancer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Freelancer $freelancer)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Freelancer  $freelancer
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Freelancer $freelancer)
    // {
    //     //
    // }
}
