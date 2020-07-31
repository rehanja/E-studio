
@php
$ar_judul = ['No','Nama','Jenis Kelamin','Tempat Lahir','Tanggal Lahir','Agama','Hp','Email','Alamat','Foto','Owner'];
$no = 1;  
@endphp

<div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
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
          @foreach($customer as $cus)

          <tr>
            <td>{{$no++}}</td>
            <td>{{$cus->nama}}</td>
            <td>{{$cus->jenis_kelamin}}</td>
            <td>{{$cus->tempat_lahir}}</td>
            <td>{{$cus->tanggal_lahir}}</td>
            <td>{{$cus->agama}}</td>
            <td>{{$cus->hp}}</td>
            <td>{{$cus->email}}</td>
            <td>{{$cus->alamat}}</td>
            <td>{{$cus->foto}}</td>
            <td>{{$cus->nama_owner}}</td>

            
           
          </tr>

          @endforeach 

        </tbody>
      </table>
    </div>
  </div>
    