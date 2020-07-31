<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

use DB;
use App\Customer;
use App\Owner;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_customer = DB::table('customer')
            ->join('owner', 'owner.id', '=', 'customer.owner_id')
            ->select('customer.*', 'owner.nama AS nama_owner')
            ->get();

        return view('customer/index', compact('ar_customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('customer/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tanggap request elemen form
        //kiri dari database , kanan dari form
        DB::table('customer')->insert([
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'agama'=>$request->agama,
            'hp'=>$request->hp,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'foto'=>$request->foto,
            'owner_id'=>$request->owner_id,
        ]);

        //landing page dipanggil ke paket
        return redirect('/customer');

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
        $data = DB::table('customer')
            ->join('owner', 'owner.id', '=', 'customer.owner_id')
            ->select('customer.*', 'owner.nama AS nama_owner')
            ->where('customer.id','=',$id)
            ->get();

        return view('customer.show', compact('data'));
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
         $data = Customer::where('id',$id)->get();
        return view('customer/update',compact('data'));
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
        DB::table('customer')->where('id',$id)->update([
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'agama'=>$request->agama,
            'hp'=>$request->hp,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'foto'=>$request->foto,
            'owner_id'=>$request->owner_id,
        ]);

        //landing page dipanggil ke customer
        return redirect('/customer'.'/'.$id);
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
        DB::table('customer')->where('id', $id)->delete();
        return redirect('/customer');
    }
     public function export(){
        return Excel::download(new CustomerExport, 'customer.xlsx');
    }
    public function exportPdf(){
        $customer = DB::table('customer')
            ->join('owner', 'owner.id', '=', 'customer.owner_id')
            ->select('customer.*', 'owner.nama AS nama_owner')
            ->get();
        

        $pdf = PDF::loadView('export.customerpdf', ['customer' => $customer]);
        return $pdf->download('customer.pdf');
    }
}



