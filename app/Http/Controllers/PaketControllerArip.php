<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    //untuk view dan searching
	public function index(Request $request){
		if ($request->has('cari')){
			$data_paket = \App\Paket::where(
				'nama', 'LIKE', '%'.$request->cari.'%')->get();
			
		}else{

		$data_paket = \App\Paket::all();
	}
		return view ('paket.index', ['data_paket' => $data_paket]);
	}



    //untuk tambah
    public function create(Request $request){

    	\App\Paket::create($request->all());
    	return redirect('/paket');
    }

    //untuk edit
	public function edit($id){
		$paket = \App\Paket::find($id);
		return view('paket.edit',['paket'=>$paket]);
	}
	//untuk update
	public function update(Request $request, $id){
		$paket = \App\Paket::find($id);
		$paket->update($request->all());
		return redirect ('/paket');
	}
	public function delete($id){
		$paket = \App\Paket::find($id);
		$paket->delete($paket);
		return redirect('/paket');
	}



}
