@extends('layouts.index')
@section('content')

@foreach($data as $paket)
<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-5">
        <br/>
        <br/>
        <center>
        <img src="{{asset('img')}}/{{ $paket->foto }}" width="80%" />
        </center>
      </div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">{{ $paket->nama }}</h1>
          </div>
          <form class="user">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Catering : </label>
                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="{{ $paket->catering }}" disabled="">
              </div>
              <div class="col-sm-6">
                <label>Dekorasi : </label>
                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="{{ $paket->dekorasi }}" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Rias : </label>
                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="{{ $paket->rias }}" disabled="">
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Nama Owner : </label>
                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="{{ $paket->nama_owner }}" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Tempat : </label>
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="{{ $paket->tempat }}" disabled="">
              </div>
              <div class="col-sm-6">
                <label>harga : </label>
                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="{{ $paket->harga }}" disabled="">
              </div>
            </div>
            <a href="{{ url('/paket') }}" class="btn btn-primary btn-user btn-block">
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