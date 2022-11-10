<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\Proyek;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek =Proyek::where('deal', 0 )->get();
        return view('freelancer.data',['proyek'=>$proyek]);
        
        // $freelancer= Freelancer::all();
        // return view('freelancer.data', ['freelancer' => $freelancer]);
    }

    

        public function edit($id){
            try {
                $proyek = Proyek::findOrFail(decrypt($id));
                return view("freelancer.edit")->with(['proyek' => $proyek]);
            } catch(\Exception $e) {
                abort(404);
            }
        }
    
        public function update(Request $request, $id){
         
            $proyek = Proyek::findOrFail($id)->update($request->except('_token'));
            if($proyek){
                return redirect()->back()->with("success", "data berhasil diperbarui");
            }else{
                return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
            }
        }
}