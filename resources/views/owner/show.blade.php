@extends('layouts.index')
@section('content')

@foreach($data as $owner)
<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-5">
        <br/>
        <br/>
        <center>
        <img src="{{asset('img')}}/{{ $owner->foto }}" width="80%" />
        </center>
      </div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">{{ $owner->nama }}</h1>
          </div>
          <form class="user">
            
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Hp : </label>
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="{{ $owner->hp }}" disabled="">
              </div>
              <div class="col-sm-6">
                <label>Email : </label>
                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="{{ $owner->email }}" disabled="">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Alamat : </label>
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="{{ $owner->alamat }}" disabled="">
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label>Lokasi : </label>
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="{{ $owner->lokasi }}" disabled="">
              </div>
            </div>
            <a href="{{ url('/owner') }}" class="btn btn-primary btn-user btn-block">
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