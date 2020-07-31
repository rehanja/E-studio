@extends('layouts.index')
@section('content')

@foreach($data as $customer)
<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-5">
        <br/>
        <br/>
        <center>
        <img src="{{asset('img')}}/{{ $customer->foto }}" width="80%" />
        </center>
      </div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">{{ $customer->nama }}</h1>
          </div>
          <form class="user">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>tempat Lahir : </label>
                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="{{ $customer->tempat_lahir }}" disabled="">
              </div>
              <div class="col-sm-6">
                <label>Tanggal Lahir : </label>
                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="{{ $customer->tanggal_lahir }}" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Jenis Kelamin : </label>
                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="{{ $customer->jenis_kelamin }}" disabled="">
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Agama : </label>
                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="{{ $customer->agama }}" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Hp : </label>
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="{{ $customer->hp }}" disabled="">
              </div>
              <div class="col-sm-6">
                <label>Email : </label>
                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="{{ $customer->email }}" disabled="">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-12 mb-3 mb-sm-0">
                <label>Alamat : </label>
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="{{ $customer->alamat }}" disabled="">
              </div>
              
            </div>
            <a href="{{ url('/customer') }}" class="btn btn-primary btn-user btn-block">
              Back
            </a>

            
            
          </form>
          

        </div>
      </div>
    </div>
  </div>
</div>

@endforeach

@endsection