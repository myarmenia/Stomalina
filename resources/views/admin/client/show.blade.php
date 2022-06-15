@extends('layouts.app')

@section('content')
@if(isset($client))
<div class="container">
    <div class="card">
        <div class="text-center">
            
         </div>
        <div class="text-center bg-primary btn">
            <h1 class="text-white">{{ $client['type'] }}</h1>
         </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $client['name'] }}</li>
        <li class="list-group-item">{{ $client['surname'] }}</li>
        <li class="list-group-item">{{ $client['patronymic'] }}</li>
        <li class="list-group-item">{{ $client['patronymic'] }}</li>
        <li class="list-group-item">{{ $client['email'] }}</li>
        <li class="list-group-item">{{ $client['dob'] }}</li>
        <li class="list-group-item">{{ $client['phone_number'] }}</li>
        <li class="list-group-item">{{ $client['passport_series'] }}</li>
        <li class="list-group-item">{{ $client['passport_number'] }}</li>
        <li class="list-group-item">{{ $client['passport_issued'] }}</li>
        <li class="list-group-item">{{ $client['passport_d_issue'] }}</li>

    </ul>
    @if(isset($client['address']))
    @foreach ($client['address'] as $address)
    <div class="text-center bg-primary btn">
       <h1 class="text-white">{{ __($address['type']) }}</h1>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $address['city'] }}</li>
        <li class="list-group-item">{{ $address['street'] }}</li>
        <li class="list-group-item">{{ $address['house'] }}</li>
        <li class="list-group-item">{{ $address['frame'] }}</li>
        <li class="list-group-item">{{ $address['quarter'] }}</li>
    </ul>
    @endforeach
    @endif
    <div class="text-center bg-primary btn">
        <h1 class="text-white">{{ __('Documents') }}</h1>
     </div>
     <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <a href="{{route('adminGetQuestionnaire',[$id,1])}}">
                Анкета 1
             </a>
             <a href="{{route('adminGetQuestionnaire',[$id,1])}}" target="_blank" download="Анкета1">
                <i class="fa fa-download" aria-hidden="true"></i>
             </a>
        </li>
        <li class="list-group-item">
            <a href="{{route('adminGetQuestionnaire',[$id,2])}}">
                Анкета 2
             </a>
             <a href="{{route('adminGetQuestionnaire',[$id,2])}}" target="_blank" download="Анкета2">
                <i class="fa fa-download" aria-hidden="true"></i>
             </a>
        </li>
        <li class="list-group-item">
             <a title="document1" href="{{route('getWord',[$id,1])}}" target="_blank" download="document1">
                <i class="fa fa-download" aria-hidden="true"></i>
             </a>
        </li>
        <li class="list-group-item">
            <a title="Договор_на_оказание_платных_медицинских_услуг_двусторон_с_физ_лицом" href="{{route('getWord',[$id,2])}}" target="_blank" download="Договор_на_оказание_платных_медицинских_услуг_двусторон_с_физ_лицом">
               <i class="fa fa-download" aria-hidden="true"></i>
            </a>
       </li>
       <li class="list-group-item">
            <a title="Договор_на_оказание_платных_медицинских_услуг_несовершен_до_18_лет" href="{{route('getWord',[$id,3])}}" target="_blank" download="Договор_на_оказание_платных_медицинских_услуг_несовершен_до_18_лет">
            <i class="fa fa-download" aria-hidden="true"></i>
            </a>
        </li>
        <li class="list-group-item">
            <a title="Согласие субъекта персональных данных на обработку его персональных данных" href="{{route('getWord',[$id,4])}}" target="_blank" download="Согласие субъекта персональных данных на обработку его персональных данных">
               <i class="fa fa-download" aria-hidden="true"></i>
            </a>
        </li>
        <li class="list-group-item">
            <a title="ИДС для ДЕТЕЙ" href="{{route('getWord',[$id,5])}}" target="_blank" download="ИДС для ДЕТЕЙ">
               <i class="fa fa-download" aria-hidden="true"></i>
            </a>
        </li>
        <li class="list-group-item">
            <a title="ИДС Общее (стоматология)" href="{{route('getWord',[$id,6])}}" target="_blank" download="ИДС Общее (стоматология)">
               <i class="fa fa-download" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
        <div class="card-body">
    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    <form action="{{ route('client.destroy',$client['id']) }}" method="POST">
        @csrf
        @method('delete')
     <button class="btn btn-sm btn-danger">
        <i class="fa fa-trash" aria-hidden="true"></i>
     </button>
    </form>
        </div>

    </div>
</div>
@endif
@endsection
{{-- //<div class="row">
    <div class="col-sm">
         
             <a href="{{route('adminGetQuestionnaire',[$id,1])}}">
                Анкета 1
             </a>
         
    </div>
    <div class="col-sm">
        
            <a href="{{route('adminGetQuestionnaire',[$id,2])}}">
                Анкета 2
             </a>
         
    </div>
</div> --}}