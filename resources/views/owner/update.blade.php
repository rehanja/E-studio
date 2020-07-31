@extends('layouts.index') 
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">
            Form Owner</h1>
          </div>

          @foreach($data as $d)
          <form class="user" method="POST" action="{{ route('owner.update',$d->id) }}">
            @csrf
            @method('PUT')


            <div class="form-group row">

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Nama :</label>
                <input type="text" class="form-control form-control-user" placeholder="Nama Lengkap" name="nama" value="{{ $d->nama }}">                   
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Hp :</label>
                <input type="text" class="form-control form-control-user" placeholder="Hp" name="hp" value="{{ $d->hp }}">                   
              </div>

            </div>



            <div class="form-group row">

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Email :</label>
                <input type="text" class="form-control form-control-user" placeholder="Email" name="email" value="{{ $d->email }}">                   
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Lokasi :</label>
                <input type="text" class="form-control form-control-user" placeholder="Lokasi" name="lokasi" value="{{ $d->lokasi }}">                   
              </div>

            </div>

            <div class="form-group row">

                <label>Alamat :</label>
                <input type="text" class="form-control form-control-user" placeholder="Alamat" name="alamat" value="{{ $d->alamat }}">                   



            </div>


            <div class="form-group">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Foto :</label>
                <input type="file" class="form-control-file" name="foto" value="{{ $d->foto }}">
              </div>                  
            </div>


            <button type="submit" class="btn btn-primary">Ubah</button>

          </form>

          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>

@endsection