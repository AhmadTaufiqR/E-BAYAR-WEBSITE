<?php

namespace App\Http\Controllers\API;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\detail_pembayaran;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class Detail_PembayaranController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    
    public function exportPdf(){
      
        $pdf = detail_pembayaran::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }
    public function index()
    {
        $data =detail_pembayaran::where('status_pembayaran','Selesai')->get();
        return view('layouts.penarikan', ['data'=>$data]);

    }

    public function laporan()
    {
        $data =detail_pembayaran::all();
        return view('layouts.laporan', ['data'=>$data]);

    }
    public function dashboard()
    {
        $data =detail_pembayaran::where('status_pembayaran','pending')->get();
        return view('layouts.dashboard', ['data'=>$data]);

    }

    

    public function getAll()
    {
        try {
            $data = detail_pembayaran::all();
            
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
                'id_pembayaran'=> 'required',
                'id_siswa'=> 'required',
                'transaction_id'=> 'required',
                'order_id'=> 'required',
                'tipe_pembayaran'=> 'required',
                'jumlah'=> 'required',
                'status_pembayaran'=> 'required'
            ]);
            
            $tb_detail_pembayaran = detail_pembayaran::create([
                'id_pembayaran'=> $request->id_pembayaran,
                'id_siswa'=> $request->id_siswa,
                'transaction_id'=> $request->transaction_id,
                'order_id'=> $request->order_id,
                'tipe_pembayaran'=> $request->tipe_pembayaran,
                'jumlah'=> $request->jumlah,
                'status_pembayaran'=> $request->status_pembayaran
            ]);
            $data = detail_pembayaran::where('id','=',$tb_detail_pembayaran->id)->get();
            
            if($data){
                return ApiFormatter::createApi(200, 'Success', $data);
            }else{
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, $error);
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
        $data = detail_pembayaran::where('id','=',$id)->get();
        
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
                'id_pembayaran'=> 'required',
                'id_siswa'=> 'required',
                'transaction_id'=> 'required',
                'order_id'=> 'required',
                'tipe_pembayaran'=> 'required',
                'jumlah'=> 'required',
                'status_pembayaran'=> 'required'
            ]);
            
            $tb_detail_pembayaran = detail_pembayaran::findOrFail($id);
            
            $tb_detail_pembayaran->update([
                'id_pembayaran'=> $request->id_pembayaran,
                'id_siswa'=> $request->id_siswa,
                'transaction_id'=> $request->transaction_id,
                'order_id'=> $request->order_id,
                'tipe_pembayaran'=> $request->tipe_pembayaran,
                'jumlah'=> $request->jumlah,
                'status_pembayaran'=> $request->status_pembayaran
            ]);
            
            $data = detail_pembayaran::where('id','=',$tb_detail_pembayaran->id)->get();
            
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
        $tb_detail_pembayaran = detail_pembayaran::findOrfail($id);
        
        $data = $tb_detail_pembayaran->delete();
        if($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed'); 
        }
    }
}
