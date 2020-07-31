@extends('layout.master')
@section('konten')

    <h1>Edit Data Paket</h1>
    <div class="row">
    <div class="col-lg-12">
        
<form action="/paket/{{$paket->id}}/update" method="POST">
    {{ csrf_field() }}


  <div class="form-group">
    <label for="exampleInputEmail1">Nama Paket</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Paket" value="{{$paket->nama}}">    
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1" >Catering</label>
    <select name="catering" class="form-control" id="exampleFormControlSelect1">
      <option value="">--Catering--</option>
      <option value="500 Orang" @if($paket->catering == '500 Orang') selected @endif>500 Orang</option>
      <option value="700 Orang" @if($paket->catering == '700 Orang') selected @endif>700 Orang</option> 
      <option value="1000 Orang" @if($paket->catering == '1000 Orang') selected @endif>1000 Orang</option>
      <option value="2000 Orang" @if($paket->catering == '2000 Orang') selected @endif>2000 Orang</option>  
    </select>   
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1" >Dekorasi</label>
    <select name="dekorasi" class="form-control" id="exampleFormControlSelect1">
      <option value="">--Dekorasi--</option>
      <option value="Elegan" @if($paket->dekorasi == 'Elegan') selected @endif>Elegan</option>
      <option value="Mewah" @if($paket->dekorasi == 'Mewah') selected @endif>Mewah</option>  
    </select>   
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1" >Rias</label>
    <select name="rias" class="form-control" id="exampleFormControlSelect1">
      <option value="">--Rias--</option>
      <option value="Pengantin" @if($paket->rias == 'Pengantin') selected @endif>Pengantin</option>
      <option value="Pengantin & Keluarga" @if($paket->rias == 'Pengantin & Keluarga') selected @endif>Pengantin & Keluarga</option> 
       
    </select>   
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1" >Tempat</label>
    <select name="tempat" class="form-control" id="exampleFormControlSelect1">
      <option value="">--Tempat--</option>
      <option value="Gedung" @if($paket->tempat == 'Gedung') selected @endif>Gedung</option>
      <option value="Rumah" @if($paket->tempat == 'Rumah') selected @endif>Rumah</option>  
    </select>   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Harga</label>
    <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga" value="{{$paket->harga}}">    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Foto</label>
    <input name="foto" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto" value="{{$paket->foto}}">    
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