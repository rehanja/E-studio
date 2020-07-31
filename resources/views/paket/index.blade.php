@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama','Catering','Dekorasi','Rias','Tempat','Harga','Owner','Foto','Action'];
$no = 1;  
@endphp

<a href="{{ route('paket.create') }}" class="btn btn-sm btn-primary">Tambah</a>

<a href="/paket/export" class="btn btn-sm btn-primary">Export Excel</a>
<a href="/paket/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>

<br/>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Paket</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            @foreach($ar_judul as $jdl)
            <th>{{ $jdl }}</th>
            @endforeach
            
          </tr>
        </thead>
        <tbody>

          @php
          $no = 1;  
          @endphp
          @foreach($ar_paket as $paket)

          <tr>
            <td>{{$no++}}</td>
            <td>{{$paket->nama}}</td>
            <td>{{$paket->catering}}</td>
            <td>{{$paket->dekorasi}}</td>
            <td>{{$paket->rias}}</td>
            <td>{{$paket->tempat}}</td>
            <td>{{$paket->harga}}</td>
            <td>{{$paket->nama_owner}}</td>
            <td><img src="{{ asset('img') }}/{{$paket->foto}}" width="40%" /> </td>



            
            <td width="15%"> 
              <form method="POST" action="{{ route('paket.destroy',$paket->id)}}" >

              <a href="{{ route('paket.show',$paket->id)}}">
              <i class="fas fa-eye"></i>
              </a>
              &nbsp;&nbsp;

              <a href="{{ route('paket.edit',$paket->id)}}">
              <i class="fas fa-pencil-alt"></i> 
              </a>

              @csrf
                @method('DELETE')
                <button type="submit" class="btn-btn-link" onclick="return confirm('Yakin dihapus?')">
                <i class="fas fa-trash-alt"></i>
                </button>
              </form>






            </td>
          </tr>

          @endforeach 

        </tbody>
      </table>
    </div>
  </div>
</div>


@endsection