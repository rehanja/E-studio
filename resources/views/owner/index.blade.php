@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama','Hp','Email','Alamat','Lokasi','Foto','Action'];
$no = 1;  
@endphp

<br/>

<a href="{{ route('owner.create') }}" class="btn-sm btn-primary">Tambah</a>


<a href="/owner/export" class="btn-sm btn-primary">Export Excel</a>


<a href="/owner/exportPdf" class="btn-sm btn-primary">Export PDF</a>




<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Owner</h6>
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
          @foreach($ar_owner
           as $owner)

          <tr>
            <td>{{$no++}}</td>
            <td>{{$owner->nama}}</td>
            <td>{{$owner->hp}}</td>
            <td>{{$owner->email}}</td>
            <td>{{$owner->alamat}}</td>
            <td>{{$owner->lokasi}}</td>
            
            <td><img src="{{ asset('img') }}/{{$owner->foto}}" width="40%" /> </td>


            
            <td width="15%"> 
              <form method="POST" action="{{ route('owner.destroy',$owner->id)}}">

              <a href="{{ route('owner.show',$owner->id)}}">
              <i class="fas fa-eye"></i>
              </a>
              &nbsp;&nbsp;

              <a href="{{ route('owner.edit',$owner->id)}}">
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