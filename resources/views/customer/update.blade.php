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
            Form Customer</h1>
          </div>

          @foreach($data as $d)
          <form class="user" method="POST" action="{{ route('customer.update',$d->id) }}">
            @csrf
            @method('PUT')


            <div class="form-group row">

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Nama :</label>
                <input type="text" class="form-control form-control-user" placeholder="Nama Lengkap" name="nama" value="{{ $d->nama }}">                   
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="form-group">
                <label>Jenis Kelamin :</label>
                <select value="{{ $d->jenis_kelamin }}" name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="">Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option> 
                </select>   
                </div>                                 
              </div>


            </div>

            <div class="form-group row">

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Tempat Lahir :</label>
                <input type="text" class="form-control form-control-user" placeholder="Tempat lahir" name="tempat_lahir" value="{{ $d->tempat_lahir }}">                   
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Tanggal Lahir :</label>
                <input type="text" class="form-control form-control-user" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ $d->tanggal_lahir }}">                   
              </div>


            </div>

            <div class="form-group row">

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Agama :</label>
                <input type="text" class="form-control form-control-user" placeholder="Agama" name="agama" value="{{ $d->agama }}">                   
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Nama Owner :</label>
              @php
                    //ambil dari owner = select * from owner
              $rs = App\Owner::all();
              @endphp
              <select name="owner_id" class="form-control">
                <option value="">-- Pilih Owner --</option>
                @foreach($rs as $row)

                @php
                    //edit data lama
                $sel = ($d->owner_id == $row->id) ? 'selected' : '';  
                @endphp

                <option value="{{ $row->id }}"{{ $sel }}>{{ $row->nama }}</option>
                @endforeach
              </select>
              </div>
            </div>

            <div class="form-group row">

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Hp :</label>
                <input type="text" class="form-control form-control-user" placeholder="Hp" name="hp" value="{{ $d->hp }}">                   
              </div>

              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Email :</label>
                <input type="text" class="form-control form-control-user" placeholder="Email" name="email" value="{{ $d->email }}">                   
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