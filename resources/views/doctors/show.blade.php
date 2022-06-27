
@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('style/doctor-show.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="specialist">
        <div class="profesor">
            <img src="{{ route('get_file',['path'=> $doctor->avatar]) }}">
            <ul class="profesor_itme">
                <li class="name">
                    {{ $doctor->full_name }}
                </li>
                <li>
                    {{ $doctor->job_title }}
                </li>
            </ul>
        </div>

    </div>
    <hr>
    <div class="above">
        <p class="above_title">Образование</p>
        @if($doctor->education)
        <ul>
            @foreach ($doctor->education as $data)
            <li>{{ "$data->date г. – $data->desc"}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="above">
        <p class="above_title">Повышение квалификации</p>
        @if($doctor->training)
        <ul>
            @foreach ($doctor->training as $data)
            <li>{{ "$data->date г. – $data->desc"}}</li>
            @endforeach
        </ul>
        @endif
    </div>
</div>

@endsection