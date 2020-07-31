@extends('layout.master')
@section('konten')


    <div class="row">
        <div class="col-6">
                <h1>Data Paket</h1>
        </div>

        <div class="col-6">

            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#exampleModal">
  Tambahkan Paket
</button>

            
        </div>
            

<table class="table table-hover">
    
        <tr>
            <th>Nama Paket</th>
            <th>Catering</th>
            <th>Dekorasi</th>
            <th>Rias</th>
            <th>Tempat</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
    
    
        @foreach($data_paket as $paket)
        <tr>
            <td>{{$paket->nama}}</td>
            <td>{{$paket->catering}}</td>
            <td>{{$paket->dekorasi}}</td>
            <td>{{$paket->rias}}</td>
            <td>{{$paket->tempat}}</td>
            <td>{{$paket->harga}}</td>
            <td>{{$paket->foto}}</td>
            <td>
              <a href="/paket/{{$paket->id}}/edit" class="btn btn-success btn-sm">Edit</a>
              <a href="/paket/{{$paket->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
           </td>
            
        </tr>
        @endforeach
    
</table>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar Paket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="/paket/create" method="POST">
    {{ csrf_field() }}


  <div class="form-group">
    <label for="exampleInputEmail1">Nama Paket</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Paket">    
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1" >Catering</label>
    <select name="catering" class="form-control" id="exampleFormControlSelect1">
      <option value="">Catering</option>
      <option value="500 Orang">500 Orang</option>
      <option value="700 Orang">700 Orang</option> 
      <option value="1000 Orang">1000 Orang</option>
      <option value="2000 Orang">2000 Orang</option>  
    </select>   
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1" >Dekorasi</label>
    <select name="dekorasi" class="form-control" id="exampleFormControlSelect1">
      <option value="">Dekorasi</option>
      <option value="Elegan">Elegan</option>
      <option value="Mewah">Mewah</option>  
    </select>   
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1" >Rias</label>
    <select name="rias" class="form-control" id="exampleFormControlSelect1">
      <option value="">Rias</option>
      <option value="Pengantin">Pengantin</option>
      <option value="Pengantin & Keluarga">Pengantin & Keluarga</option> 
       
    </select>   
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1" >Tempat</label>
    <select name="tempat" class="form-control" id="exampleFormControlSelect1">
      <option value="">Tempat</option>
      <option value="Gedung">Gedung</option>
      <option value="Rumah">Rumah</option>  
    </select>   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Harga</label>
    <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga">    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Foto</label>
    <input name="foto" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto">    
  </div>




  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      </form>

    </div>
  </div>
</div>









@endsection