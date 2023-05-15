<?php

namespace App\Http\Controllers\API;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = admin::all();

        if($data){
            return ApiFormatter::createApi(200, 'Success', $data);
        }else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
    
    public function login(request $request){
        $admin = admin::where('username', $request->username)->first();
    
            if (!$admin|| !\Hash::check($request->password, $admin->password)){
                return response()->json([
                    'message' => 'Unauthorized'
                ], 401);
            }
            $token =$admin->createToken('token')->plainTextToken;

            return response()->json([
                'message' =>'success',
                'admin' => $admin,
                'token' => $token,
            ],200);
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
                'jenis_kelamin' => 'required',
                'gambar' => "required",
            ]);

            $tb_admin = admin::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'gambar' =>$request->gambar,
            ]);
        $data = admin::where('id','=',$tb_admin->id)->get();

        if($data){
            return ApiFormatter::createApi(200, 'Success', $data);
        }else{
            return ApiFormatter::createApi(400, 'Failed');
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
        $data = admin::where('id','=',$id)->get();

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
                'jenis_kelamin' => 'required',
                'gambar' => 'required',
            ]);
            
            $tb_admin = admin::findOrFail($id);

            $tb_admin->update([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'gambar' => $request->gambar
            ]);

        $data = admin::where('id','=',$tb_admin->id)->get();
        
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
        $tb_admin = admin::findOrfail($id);

        $data = $tb_admin->delete();
        if($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed'); 
        }
    }
}
