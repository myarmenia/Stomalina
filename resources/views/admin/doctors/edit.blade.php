@extends('layouts.app', ['title' => __('Edit Doctor')])

@section('content')
<div class="container">
    <div class="py-4">
    <form method="POST" action="{{ route('doctors.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control form-control-alternative" value="{{ $doctor['name'] }}" name="name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control form-control-alternative" value="{{ $doctor['middlename'] }}" name="middlename">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control form-control-alternative" value="{{ $doctor['surname'] }}" name="surname">
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <img src="" alt="">
          </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="avatar">
                        <label class="custom-file-label">{{ __('Choose Avatar') }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control form-control-alternative" rows="3" name="job_title">{{ $doctor['job_title'] }}</textarea>
            </div>
        </div>
        <div class="row py-4 text-center">
            <div class="col-md-12">
                <button class="btn btn-primary">
                    {{ __('Save') }}
                </button>
            </div>
        </div>
       
      </form>
    </div>
</div>

@endsection
