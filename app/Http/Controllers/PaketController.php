<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PaketExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

use DB;
use App\Paket;
use App\Owner;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //$ar_paket = DB::table('paket')->get();
        //return view ('paket/index', compact('ar_paket'));
        $ar_paket = DB::table('paket')
            ->join('owner', 'owner.id', '=', 'paket.owner_id')
            ->select('paket.*', 'owner.nama AS nama_owner')
            ->get();

        return view('paket/index', compact('ar_paket'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('paket/form');
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
        
        $file = $request->file('foto');
        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'img';
        $file->move($tujuan_upload,$nama_file);

        //
        //tanggap request elemen form
        //kiri dari database , kanan dari form
        DB::table('paket')->insert([
            'nama'=>$request->nama,
            'catering'=>$request->catering,
            'dekorasi'=>$request->dekorasi,
            'rias'=>$request->rias,
            'tempat'=>$request->tempat,
            'harga'=>$request->harga,
            'foto'=>$nama_file,
            'owner_id'=>$request->owner_id,
        ]);

        //landing page dipanggil ke paket
        return redirect('/paket');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $data = DB::table('paket')
            ->join('owner', 'owner.id', '=', 'paket.owner_id')
            ->select('paket.*', 'owner.nama AS nama_owner')
            ->where('paket.id','=',$id)
            ->get();

        return view('paket.show', compact('data'));
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
        $data = Paket::where('id',$id)->get();
        return view('paket/update',compact('data'));

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
        //
        DB::table('paket')->where('id',$id)->update([
            'nama'=>$request->nama,
            'catering'=>$request->catering,
            'dekorasi'=>$request->dekorasi,
            'rias'=>$request->rias,
            'tempat'=>$request->tempat,
            'harga'=>$request->harga,
            'foto'=>$request->foto,
            'owner_id'=>$request->owner_id,
        ]);

        //landing page dipanggil ke paket
        return redirect('/paket'.'/'.$id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('paket')->where('id', $id)->delete();
        return redirect('/paket');
    }

    public function export() 
    {
        return Excel::download(new PaketExport, 'paket.xlsx');
    }

    public function exportPdf()
    {
        $paket = DB::table('paket')
            ->join('owner', 'owner.id', '=', 'paket.owner_id')
            ->select('paket.*', 'owner.nama AS nama_owner')
            ->get();

        $pdf = PDF::loadView('export.paketpdf', ['paket' => $paket]);
        return $pdf->download('paket.pdf');
    }


}
