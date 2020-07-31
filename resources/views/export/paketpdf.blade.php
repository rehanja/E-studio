@php
$ar_judul = ['No','Nama','Catering','Dekorasi','Rias','Tempat','Harga','Owner'];
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
          @foreach($paket as $pak)
          <tr>
			     <td>{{$no++}}</td>
            <td>{{$pak->nama}}</td>
            <td>{{$pak->catering}}</td>
            <td>{{$pak->dekorasi}}</td>
            <td>{{$pak->rias}}</td>
            <td>{{$pak->tempat}}</td>
            <td>{{$pak->harga}}</td>
            <td>{{$pak->nama_owner}}</td>
          </tr>
            

        @endforeach
	</tbody>
</table>
</div>
</div>