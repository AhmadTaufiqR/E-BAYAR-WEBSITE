<?php

namespace App\Http\Controllers\API;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\pembayaran;
use Exception;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pembayaran::all();

        if($data){
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
                'jenis_pembayaran' => 'required',
                'terakhir_pembayaran' => 'required',
                'awal_pembayaran' => 'required',
                'jumlah_pembayaran' => 'required',
            ]);

            $tb_pembayaran = pembayaran::create([
                'jenis_pembayaran' => $request->jenis_pembayaran,
                'terakhir_pembayaran' => $request->terakhir_pembayaran,
                'awal_pembayaran' => $request->awal_pembayaran,
                'jumlah_pembayaran' => $request->jumlah_pembayaran,
            ]);
        $data = pembayaran::where('id','=',$tb_pembayaran->id)->get();

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
        $data = pembayaran::where('id','=',$id)->get();

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
                'jenis_pembayaran' => 'required',
                'terakhir_pembayaran' => 'required',
                'awal_pembayaran' => 'required',
                'jumlah_pembayaran' => 'required',
            ]);
            
            $tb_pembayaran = pembayaran::findOrFail($id);

            $tb_pembayaran->update([
                'jenis_pembayaran' => $request->jenis_pembayaran,
                'terakhir_pembayaran' => $request->terakhir_pembayaran,
                'awal_pembayaran' => $request->awal_pembayaran,
                'jumlah_pembayaran' => $request->jumlah_pembayaran
            ]);

        $data = pembayaran::where('id','=',$tb_pembayaran->id)->get();
        
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
        $tb_pembayaran = pembayaran::findOrfail($id);

        $data = $tb_pembayaran->delete();
        if($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed'); 
        }
    }
}
