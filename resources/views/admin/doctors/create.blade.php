@extends('layouts.app', ['title' => __('Create Doctor')])

@section('content')
<div class="container">
    <div class="py-4">
    <form method="POST" action="{{ route('doctors.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control form-control-alternative" placeholder="{{ __('Name') }}" name="name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control form-control-alternative" placeholder="{{ __('Middlename') }}" name="middlename">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control form-control-alternative" placeholder="{{ __('Surname') }}" name="surname">
                </div>
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
                <textarea class="form-control form-control-alternative" rows="3" placeholder="{{ __('Job Title') }}" name="job_title"></textarea>
            </div>
        </div>
        <div class="py-4">
          <div class="row">
            <div class="col-md-6">
              <div class="column-2a">
                <h2>{{ __('Education') }}</h2>
                  <table class="table-style" id="education_ap">
                  </table>
                  <div class="form-group py-3">
                    <div class="custom-file">
                        <input type="text" class="form-control form-control-alternative" id="education_inp" placeholder="{{ __('Add Education') }}">
                        <input type="number" class="form-control form-control-alternative py-3" min="1900" max="2099" id="education_date_inp">
                        <button class="btn" type="button" onclick="addDesc('education')">{{ __('Add') }}</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
              <div class="column-2a">
                <h2>{{ __('Training') }}</h2>
                  <table class="table-style" id="training_ap">
                  </table>
                  <div class="form-group py-3">
                    <div class="custom-file">
                        <input type="text" class="form-control form-control-alternative" id="training_inp" placeholder="{{ __('Add Training') }}">
                        <input type="number" class="form-control form-control-alternative py-3" min="1900" max="2099" id="training_date_inp">
                        <button class="btn" type="button" onclick="addDesc('training')">{{ __('Add') }}</button>
                    </div>
                </div>
            </div>
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
<script>
  let educationDesc = 0;
  let trainingDesc = 0;
</script>
<script src="{{ asset('js/doctor/create.js') }}"></script>
@endsection

