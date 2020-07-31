@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Nama','Jenis Kelamin','Tempat Lahir','Tanggal Lahir','Agama','Hp','Email','Alamat','Foto','Owner','Action'];
$no = 1;  
@endphp

<a href="{{ route('customer.create') }}" class="btn-sm btn-primary">Tambah</a>
<a href="/customer/export" class="btn-sm btn-primary">Export Excel</a>
<a href="/customer/exportPdf" class="btn-sm btn-primary">Export PDF</a>



<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
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
          @foreach($ar_customer as $customer)

          <tr>
            <td>{{$no++}}</td>
            <td>{{$customer->nama}}</td>
            <td>{{$customer->jenis_kelamin}}</td>
            <td>{{$customer->tempat_lahir}}</td>
            <td>{{$customer->tanggal_lahir}}</td>
            <td>{{$customer->agama}}</td>
            <td>{{$customer->hp}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->alamat}}</td>
            
            
            <td><img src="{{ asset('img') }}/{{$customer->foto}}" width="40%" /> </td>

            <td>{{$customer->nama_owner}}</td>

            
            <td width="15%"> 
              <form method="POST" action="{{ route('customer.destroy',$customer->id)}}">

              <a href="{{ route('customer.show',$customer->id)}}">
              <i class="fas fa-eye"></i>
              </a>
              &nbsp;&nbsp;

              <a href="{{ route('customer.edit',$customer->id)}}">
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