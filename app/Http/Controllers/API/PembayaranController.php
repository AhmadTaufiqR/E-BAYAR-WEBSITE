<?php

namespace App\Http\Controllers\API;

use App\Helper\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\pembayaran;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tanggunganspp = pembayaran::where('tipe', 'Tanggungan Spp')->get();
        return view('layouts.tanggunganspp', ['tanggunganspp' => $tanggunganspp]);
    }

    public function index1(Request $request)
    {
        $tanggunaganuanggedung = pembayaran::where('tipe', 'Tanggungan Uang Gedung')->get();
        return view('layouts.tanggunganuanggedung', ['tanggunganuanggedung' => $tanggunaganuanggedung]);
    }

    public function tanggunganspp(Request $request)
    {
        try {

            $this->validate($request, [

                'bulan' => 'required',
                'jumlah_bayar' => 'required',
                'awal_pembayaran' => 'required',
                'id_admin' => 'required',
            ]);

            pembayaran::create([
                'tipe' => $request->input('tipe'),
                'bulan' => $request->input('bulan'),
                'jumlah_bayar' => $request->input('jumlah_bayar'),
                'awal_pembayaran' => $request->input('awal_pembayaran'),
                'id_admin' => $request->input('id_admin'),

            ]);
            return redirect()->back()->with('flash_message_success', 'Anda Berhasil Menambahkan data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('flash_message_danger', 'Anda Gagal Menambahkan data');
        }
    }

    public function tanggunganuang(Request $request)
    {
        try {

            $this->validate($request, [

                'bulan' => 'required',
                'jumlah_bayar' => 'required',
                'awal_pembayaran' => 'required',
                'id_admin' => 'required',
            ]);

            pembayaran::create([
                'tipe' => $request->input('tipe'),
                'bulan' => $request->input('bulan'),
                'jumlah_bayar' => $request->input('jumlah_bayar'),
                'awal_pembayaran' => $request->input('awal_pembayaran'),
                'id_admin' => $request->input('id_admin'),

            ]);
            return redirect()->back()->with('flash_message_success', 'Anda Berhasil Menambahkan data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('flash_message_danger', 'Anda Gagal Menambahkan data');
        }
    }


    public function editSpp(Request $request, $id)
    {
        
        if ($request->isMethod('post')) {
            $ss= $request->all();
            
       
            pembayaran::where(['id'=>$id])->update(['bulan'=>$ss['bulan'],
            'jumlah_bayar'=>$ss['jumlah_bayar'],'awal_pembayaran'=>$ss['awal_pembayaran']]);

            return redirect()->back()->with('flash_message_success','Data berhasil diubah ');
       
        }

    }

    public function editUang(Request $request, $id)
    {
        
        if ($request->isMethod('post')) {
            $ss= $request->all();
            
       
            pembayaran::where(['id'=>$id])->update(['bulan'=>$ss['bulan'],
            'jumlah_bayar'=>$ss['jumlah_bayar'],'awal_pembayaran'=>$ss['awal_pembayaran']]);

            return redirect()->back()->with('flash_message_success','Data berhasil diubah ');
       
        }

    }
    
    public function destroyspp($id)
    {
        $data = pembayaran::findOrfail($id);
        $data->delete();
        return redirect()->back()->with('flash_message_success','Anda Berhasil Hapus data');
    }
    public function destroyuang($id)
    {
        $data = pembayaran::findOrfail($id);
        $data->delete();
        return redirect()->back()->with('flash_message_success','Anda Berhasil Hapus data');
    }






    public function getAll()
    {
        try {
            $data = pembayaran::all();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function all_tahun_spp($tahun)
    {
        try {
            $data = pembayaran::where('tipe', 'SPP')
                ->whereYear('awal_pembayaran', $tahun)
                ->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function get_tahun_spp()
    {
        try {
            $data = pembayaran::where('tipe', 'SPP')
                ->selectRaw('YEAR(awal_pembayaran) as tahun')
                ->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
    public function all_ug($tahun)
    {
        try {
            $data = pembayaran::where('tipe', '=', 'Uang Gedung')
                ->whereYear('awal_pembayaran', $tahun)
                ->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
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
                'bulan' => 'required',
                'tipe' => 'required',
                'jumlah_bayar' => 'required',
                'awal_pembayaran' => 'required',
                'id_admin' => 'required'
            ]);

            $tb_pembayaran = pembayaran::create([
                'bulan' => $request->bulan,
                'tipe' => $request->tipe,
                'jumlah_bayar' => $request->jumlah_bayar,
                'awal_pembayaran' => $request->awal_pembayaran,
                'id_admin' => $request->id_admin
            ]);
            $data = pembayaran::where('id', '=', $tb_pembayaran->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            }
            // else{
            //     return ApiFormatter::createApi(400, 'Failed');
            // }
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
        $data = pembayaran::where('id', '=', $id)->get();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
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
            $request->validate([
                'bulan' => 'required',
                'tipe' => 'required',
                'jumlah_bayar' => 'required',
                'awal_pembayaran' => 'required',
                'id_admin' => 'required'
            ]);

            $tb_pembayaran = pembayaran::findOrFail($id);

            $tb_pembayaran->update([
                'bulan' => $request->bulan,
                'tipe' => $request->tipe,
                'jumlah_bayar' => $request->jumlah_bayar,
                'awal_pembayaran' => $request->awal_pembayaran,
                'id_admin' => $request->id_admin
            ]);

            $data = pembayaran::where('id', '=', $tb_pembayaran->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
