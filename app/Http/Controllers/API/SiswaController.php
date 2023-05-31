<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\siswa;
use App\Helper\ApiFormatter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function post(Request $request)
    { 
        try{
            $this->validate($request,[
                'username' => 'required|unique:tb_siswa',
                'password' => 'required',
                'nama' => 'required',
                'no_telephone' => 'required|unique:tb_siswa|max:13',
                'email' => 'required|unique:tb_siswa',
                'id_angkatan' => 'required',
                'id_kelas' => 'required',
                // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5052',
                
            ]);

            $filename = '';
   
            if ($request->file('gambar')) {
                $file = $request->file('gambar');
                $generateFilename = join('', [uniqid(), now()->timestamp]);
                $extention = $file->getClientOriginalExtension();
                $filename = join('.', [$generateFilename, $extention]);
                $filename = $file->storeAs('admin',  $filename);
            }
                siswa::create([
                'nama'=>$request->input('nama'),
                'password'=>$request->input('password'),
                'no_telephone'=>$request->input('no_telephone'),
                'email'=>$request->input('email'),
                'username'=>$request->input('username'),
                'gambar'=>$request->input('gambar'),
                'alamat'=>$request->input('alamat'),
                'id_angkatan'=>$request->input('id_angkatan'),
                'id_kelas'=>$request->input('id_kelas'),
                // 'gambar'=> $filename
            ]);
            return redirect()->back()->with('flash_message_success','Anda Berhasil Menambahkan data');
        }
        catch (\Throwable $th) {
            return redirect()->back()->with('flash_message_danger','Anda Gagal Menambahkan data');
        }
        

      

    }

    public function siswa(){
        $siswa=siswa::all(); 
        
        return view('layouts.dataasiswa',compact('siswa'));
    }

    public function edit(Request $request, $id)
    {
        
        if ($request->isMethod('post')) {
            $edit  =$request->all();
            
          
            siswa::where(['id'=>$id])->update(['username'=>$edit['username'],
            'nama'=>$edit['nama'],'no_telephone'=>$edit['no_telephone'],'email'=>$edit['email'],
            'alamat'=>$edit['alamat'],'gambar'=>$edit['gambar'],'password'=>$edit['password']]);

            return redirect()->back()->with('flash_message_success','Data berhasil diubah ');
       
        }

    }

    public function destroysiswa($id)
    {
        $data = siswa::findOrfail($id);
        $data->delete();
        return redirect()->back()->with('flash_message_success','Anda Berhasil Hapus data');
    }


    public function index(request $request)
    {
        
        $siswa=DB::table('tb_siswa')->get();
        return view('layouts.datasiswa', ['siswa'=>$siswa]);
        
    }
    
    public function getAll()
    {
        try {
            $data = siswa::all();
            
            if($data){
                return ApiFormatter::createApi(200, 'Success', $data);
            }else{
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400,'Failed');
        }
    }

    public function AllSiswa()
    {
        try {
            $data = siswa::all();
            
            if($data){
                return ApiFormatter::createApi(200, 'Success', $data);
            }else{
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400,'Failed');
        }
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }
    
    public function login(request $request){
        $siswa = siswa::where('username', $request->username)->first();
        
        if (!$siswa|| !Hash::check($request->password, $siswa->password)){
            return response()->json([
                "message" => 'Unauthorized'
            ], 401);
        }
        $token =$siswa->createToken('token')->plainTextToken;
        
        return response()->json([
            'message' =>'success',
            'siswa' => $siswa,
            'token' => $token,
        ], 200);
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'username' => 'required',
                'password' => 'required',
                'nama' => 'required',
                'no_telephone' => 'required',
                'email' => 'required',
                'alamat' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
            $filename = '';
            
            if ($request->file('gambar')) {
                $file = $request->file('gambar');
                $generateFilename = join('', [uniqid(), now()->timestamp]);
                $extention = $file->getClientOriginalExtension();
                $filename = join('.', [$generateFilename, $extention]);
                $filename = $file->storeAs('siswa',  $filename);
            }
            
            $tb_siswa = siswa::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'nama' => $request->nama,
                'no_telephone' => $request->no_telephone,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'gambar' => $filename,
                'id_angkatan' => $request->id_angkatan,
                'id_kelas' => $request->id_kelas,
            ]);
            
            $data = siswa::where('id','=',$tb_siswa->id)->get();
            
            if($data){
                return ApiFormatter::createApi(200, 'Success',$data);
            }else{
                return ApiFormatter::createApi(400,'Failed'); 
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400,'Failed');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $data = siswa::where('id','=',$id)->get();
        
        if($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed'); 
        }
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
   
    
 
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        try {
            $request ->validate([
                'username' => 'required',
                'password' => 'required',
                'nama' => 'required',
                'no_telephone' => 'required',
                'email' => 'required',
                'alamat' => 'required',
                'gambar' => 'required',
            ]);
            
            $tb_siswa = siswa::findOrFail($id);
            
            if ($request->file('gambar')) {
                if (Storage::exists($tb_siswa->gambar)) {
                    Storage::delete([$tb_siswa->gambar]);
                }
                $file = $request->file('gambar');
                $generateFilename = join('', [uniqid(), now()->timestamp]);
                $extention = $file->getClientOriginalExtension();
                $filename = join('.', [$generateFilename, $extention]);
                $filename = $file->storeAs('siswa',  $filename);
            }
            
            $tb_siswa->update([
                'username' => $request->username,
                'password' =>Hash::make($request->password),
                'nama' => $request->nama,
                'no_telephone' => $request->no_telephone,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'gambar' => $filename,
                'id_angkatan' => $request->id_angkatan,
                'id_kelas' => $request->id_kelas,
            ]);
            
            $data = siswa::where('id','=',$tb_siswa->id)->get();
            
            if($data){
                return ApiFormatter::createApi(200, 'Success',$data);
            }else{
                return ApiFormatter::createApi(400,'Failed'); 
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400,'Failed');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $tb_siswa = siswa::findOrfail($id);
        
        $data = $tb_siswa->delete();
        if($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed'); 
        }
    }
}
