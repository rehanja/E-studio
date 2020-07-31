
@php
$ar_judul = ['No','Nama','Hp','Email','Alamat','Lokasi','Foto'];
$no = 1;  
@endphp


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
          @foreach($owner
           as $ow)

          <tr>
            <td>{{$no++}}</td>
            <td>{{$ow->nama}}</td>
            <td>{{$ow->hp}}</td>
            <td>{{$ow->email}}</td>
            <td>{{$ow->alamat}}</td>
            <td>{{$ow->lokasi}}</td>
            <td>{{$ow->foto}}</td>
          </tr>

          @endforeach 

        </tbody>
      </table>
   