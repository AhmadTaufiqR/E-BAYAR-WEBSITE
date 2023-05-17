<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\siswa;
use App\Helper\ApiFormatter;
use Illuminate\Support\Facades\Hash;
use Exception;
use \Storage;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = siswa::all();

        if($data){
            // return ApiFormatter::createApi(200, 'Sucess',$data);
            return ApiFormatter::createApi(200, 'Success', $data);
        }else{
            return ApiFormatter::createApi(400, 'Failed');
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

            if (!$siswa|| !\Hash::check($request->password, $siswa->password)){
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
            ]);

            $data = siswa::where('id','=',$tb_siswa->id)->get();

            if($data){
                return ApiFormatter::createApi(200, 'Success',$data);
            }else{
                return ApiFormatter::createApi(400,'Failed'); 
            }
        } catch (Exeception $error) {
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
     */
    public function edit($id)
    {
        //
    }

    /**
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
            ]);

        $data = siswa::where('id','=',$tb_siswa->id)->get();
        
        if($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed'); 
        }
        } catch (Exeception $error) {
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
