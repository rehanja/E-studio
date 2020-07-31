<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\OwnerExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

use DB;
use App\Customer;
use App\Owner;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_owner = DB::table('owner')->get();

        return view('owner/index', compact('ar_owner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('owner/form');
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
        //tanggap request elemen form
        //kiri dari database , kanan dari form
        DB::table('owner')->insert([
            'nama'=>$request->nama,
            'hp'=>$request->hp,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'lokasi'=>$request->lokasi,
            'foto'=>$nama_file,
        ]);

        //landing page dipanggil ke owner
        return redirect('/owner');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('owner')
        ->where('owner.id','=',$id)
        ->get();

        return view('owner.show', compact('data'));
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
        $data = Owner::where('id',$id)->get();
        return view('owner/update',compact('data'));
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
        DB::table('owner')->where('id',$id)->update([
            'nama'=>$request->nama,
            'hp'=>$request->hp,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'lokasi'=>$request->lokasi,
            'foto'=>$request->foto, 
    ]);

        //landing page dipanggil ke owner
        return redirect('/owner'.'/'.$id);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('owner')->where('id', $id)->delete();
        return redirect('/owner');
    }
    public function export(){
        return Excel::download(new OwnerExport, 'owner.xlsx');
    }
    public function exportPdf(){
        $owner = DB::table('owner')
        ->get();

        $pdf = PDF::loadView('export.ownerpdf', ['owner' => $owner]);
        return $pdf->download('owner.pdf');
    }
}
