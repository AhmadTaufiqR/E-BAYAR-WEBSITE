<?php

namespace App\Http\Controllers\API;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\kelas;
use Exception;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        try {
            $data = kelas::all();
            
            if($data){
                return ApiFormatter::createApi(200, 'Success', $data);
            }else{
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400,'Failed');
        }
    }


    public function getAll()
    {
        try {
            $data = kelas::all();
            
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
                'kelas' => 'required',
            ]);
            
            $tb_kelas = kelas::create([
                'kelas' => $request->kelas,
            ]);
            $data = kelas::where('id','=',$tb_kelas->id)->get();
            
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
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $data = kelas::where('id','=',$id)->get();
        
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
                'kelas' => 'required',
            ]);
            
            $tb_kelas = kelas::findOrFail($id);
            
            $tb_kelas->update([
                'kelas' => $request->kelas,
            ]);
            
            $data = kelas::where('id','=',$tb_kelas->id)->get();
            
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
        $tb_kelas = kelas::findOrfail($id);
        
        $data = $tb_kelas->delete();
        if($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed'); 
        }
    }
}
