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
              <form class="user" method="POST" action="{{ route('customer.store') }}">
                @csrf
                <div class="form-group row">
                  
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Nama Lengkap" name="nama" value="">                   
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Jenis Kelamin" name="jenis_kelamin" value="">                   
                  </div>

                  
                </div>
                
                <div class="form-group row">
                  
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Tempat Lahir" name="tempat_lahir" value="">                   
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" class="form-control form-control-user" placeholder="Tanggal Lahir" name="tanggal_lahir" value="">                   
                  </div>

                  
                </div>

                <div class="form-group row">
                  
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Agama" name="agama" value="">                   
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Hp" name="hp" value="">                   
                  </div>

                  
                </div>
                
                
                <div class="form-group row">
                  
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Email" name="email" value="">                   
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Alamat" name="alamat" value="">                   
                  </div>

                  
                </div>
                

                
                <div class="form-group">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>Foto : 
                    <input type="file" class="form-control-file" name="foto" value="">
                    </label>
                  </div>                  
                </div>

                <div class="form-group">
                    @php
                    //ambil dari owner = select * from owner
                    $rs = App\Owner::all();
                    @endphp
                    <select name="owner_id" class="form-control">
                      <option value="">-- Pilih Owner --</option>
                      @foreach($rs as $row)
                      <option value="{{ $row->id }}">{{ $row->nama }}</option>
                      @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

              </form>
                
            </div>
          </div>
        </div>
      </div>
</div>

@endsection