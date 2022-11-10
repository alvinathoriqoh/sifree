<?php

namespace App\Http\Controllers;

// use App\Models\proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proyek;
use App\Models\User;


use Auth;
use Storage;


class ProyekController extends Controller
{
    public function index(){
        $proyek = DB::table('proyek')->orderBy('id','DESC')->get();
        // $proyek= Proyek::all();
        return view('proyek.data',compact('proyek'));
        // return view('proyek.data');
    }
//tambah simpan proyek
    public function tambah(){
        $user = User::all();
        return view('proyek.input')
            ->with([
                'user' => $user,
            ]);
        }
        public function simpan(Request $request){
            // if($request->hasFile('file')){
            //     $file = $request->file('file');
            //     $nama_file= $file->getClientOriginalName();
            //     $file->move('Files/'.$nama_file);
            //     // $file->move('Files'.$nama_file);
            //     $data['file']='Files/'.$nama_file;
            //         }
            // $file =$request->file('file');
            // $nama_file= $file->getClientOriginalName();
            // $file->store('public/storage'.$nama_file);

            // $file =$request->file('file');
            // $nama_file='Detail.pdf';
            // $file->store('public/storage'.$nama_file);

            $data=new Proyek;
            if($request->file('file')){
                $file=$request->file('file');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $request->file->move('storage/',$filename);

                $data->file=$filename;
            }

            $data['judul']=$request->judul;
            $data['jenis']=$request->jenis;
            $data['detail']=$request->detail;
            $data['tgl_mulai']=$request->tgl_mulai;
            $data['tgl_selesai']=$request->tgl_selesai;
            $data['harga']=$request->harga;
            $data['user_id']=Auth::user()->id;
            $data->save();
            
            // $data['file']= $nama_file;
        
                    // Proyek::insert($data);
        // DB::table('proyek')->insert(
        //     ['judul'=>$request->judul,
        //     'jenis'=>$request->jenis, 
        //     'detail'=>$request->detail,
        //     'tgl_mulai'=>$request->tgl_mulai,
        //     'tgl_selesai'=>$request->tgl_selesai,
        //     'harga'=>$request->harga,
        //     'user'=>Auth::user()->id,
        //     ]);
           
            // $path = Proyek::create([
            //     'file' => $file,
            // ]);
            
        return redirect('proyek/');
        }
//tambil data proyek saya
    public function saya(){
        // $proyek = DB::table('proyek')->get();
        $user= auth()->user()->id;
        $proyek = Proyek::where('user_id',$user)->orderBy('id','DESC')->get();
        return view('proyeksaya',compact('proyek'));
        // return view('proyek.data');
    }
//tampil table lelang
    public function lelang(){
        $proyek =Proyek::where('status', 1 )->orderBy('id','DESC')->get();
        //$proyek =$this->Proyek->orderBy('id','DESC')->get();
        return view('lelang',['proyek'=>$proyek]);
    }
        public function dl($file){
                // return response()->download('public/storage/'.$file);
                return response()->download(storage_path("app/public/{$file}"));
            // $dl = Proyek::findOrFail(decrypt($id));
            // $nama_file= 'Detail.pdf';
            // return Storage::download($dl->file)->get('public/storage'.$nama_file);
            // $file->file('file');
            
            // return response()->download($file, $nama_file);
            // $nama_file= 'Detail.pdf';
            // $filename= 'Detail.pdf';
            // $file = storage_path()."/".$filename;
            // $contents = Storage::disk('public')->get($filename);
            // dd($contents);
            // $dl->file;
            // $nama_file ='De';
            // return response()->download($file, $nama_file);
        }

        public function detail($id){
            // $proyek = Proyek::findOrFail(decrypt($id))
            // // $proyek = DB::table('proyek')
            // ->join('users', 'users.id', '=', 'proyek.user')->get();
            // return view('proyek.detail')->with('proyek',$proyek);

            // $proyek = Proyek::findOrFail(decrypt($id));
            // $proyek = DB::table('proyek')->get();
            
            // $user= auth()->user()->id;
            // $proyek = Proyek::where('user',$user)->get();

            $proyek = Proyek::findOrFail(decrypt($id));
            return view('proyek.detail',compact('proyek'));

            // return view('proyek.data');
        }
        public function det($id){
            $proyek = Proyek::findOrFail(decrypt($id));
            return view('freelancer.detail',compact('proyek'));
        }

        public function edit($id){
            try {
                $proyek = Proyek::findOrFail(decrypt($id));
                return view("proyek.edit")->with(['proyek' => $proyek]);
            } catch(\Exception $e) {
                abort(404);
            }
        }

        //proyek freelancer
        public function proyekfree(){
            // $proyek = DB::table('proyek')->get();
            $proyek= Proyek::orderBy('id','DESC')->get();
            return view('freelancer.data',compact('proyek'));
            // return view('proyek.data');
        }
    
        public function update(Request $request, $id){
         
            $proyek = Proyek::findOrFail($id)->update($request->except('_token'));
            if($proyek){
                return redirect()->back()->with("success", "data berhasil diperbarui");
            }else{
                return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
            }
        }
    
        public function delete($id){
        try {
            $proyek = Proyek::findOrFail(decrypt($id))->delete();
            if($proyek){
            return redirect()->back()->with("success", "data berhasil dihapus");
        }else{
            return redirect()->back()->withErrors("Terjadi kesalahan saat menghapus data");
        }
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function acc($id){
        $proyek=\DB::table('proyek')->where('id', $id)->first();

        $approve = $proyek->deal;
        if($approve == 1){
            \DB::table('proyek')->where('id', $id)->update([
                'deal'=>0
            ]);
        }else{
            \DB::table('proyek')->where('id', $id)->update([
                'deal'=>1
            ]);
        }
        \Session::flash('sukses', 'Status Berhasil Diubah');
        return redirect('proyeksaya');
    }
}
            
    