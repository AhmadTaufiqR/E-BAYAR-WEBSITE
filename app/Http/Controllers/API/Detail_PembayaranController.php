<?php

namespace App\Http\Controllers\API;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\detail_pembayaran;
use Exception;
use Illuminate\Http\Request;

class Detail_PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = detail_pembayaran::all();

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
                'jumlah_pembayaran' => 'required',
                'tanggal_pembayaran' => 'required',
                'status_pembayaran' => 'required',
            ]);

            $tb_detail_pembayaran = detail_pembayaran::create([
                'jumlah_pembayaran' => $request->jumlah_pembayaran,
                'tanggal_pembayaran' => $request->tanggal_pembayaran,
                'status_pembayaran' => $request->status_pembayaran,
            ]);
        $data = detail_pembayaran::where('id','=',$tb_detail_pembayaran->id)->get();

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
                'jumlah_pembayaran' => 'required',
                'tanggal_pembayaran' => 'required',
                'status_pembayaran' => 'required',
            ]);
            
            $tb_detail_pembayaran = detail_pembayaran::findOrFail($id);

            $tb_detail_pembayaran->update([
                'jumlah_pembayaran' => $request->jumlah_pembayaran,
                'tanggal_pembayaran' => $request->tanggal_pembayaran,
                'status_pembayaran' => $request->status_pembayaran
            ]);

        $data = detail_pembayaran::where('id','=',$tb_detail_pembayaran->id)->get();
        
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
        $tb_detail_pembayaran = detail_pembayaran::findOrfail($id);

        $data = $tb_detail_pembayaran->delete();
        if($data){
            return ApiFormatter::createApi(200, 'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed'); 
        }
    }
}
