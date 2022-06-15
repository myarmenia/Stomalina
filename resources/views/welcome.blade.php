@extends('layout.app')

@section('css')
@endsection
@section('content')
<div class="container">
    <div class="the_user">
      <h1 class="user_header">О нашей клинике</h1>
      <div class="user_text">
        <p>-Оказываем стоматологическую помощь с 2004 года</p>
        <p class="p-1">-Принимаем детей и взрослых</p>
        <p class="p-1">-Лечение под наркозом и седацией</p>
        <p class="p-1">-Лечение под микроскопом</p>
        <p class="p-1">
          -Собственная зуботехническая лаборатория. Её наличие позволяет
          выполнять работу в значительно меньшие
        </p>
        <p>сроки и по более низким ценам</p>
        <p class="p-1">-Бесплатные парковочные места перед входом</p>
        <p class="p-1">
          -Современные и качественные материалы, инструменты, оборудование.
          Подробнее об оснащении нашей клиники
        </p>
        <p>можно ознакомиться по ссылке ниже</p>
      </div>
    </div>
  </div>

  <!-- ----------------------------------------------------------------------------------------------- -->

  <div class="container">
    <div class="the_user">
      <h1 class="user_header">Наши услуги</h1>
      <div class="doctor_text">
        <div class="tip_text">
          <a href="#"> <p>Детская стоматология</p></a>
          <a href="#"><p>Терапевтическая стоматология</p></a>
          <a href="#"> <p>Профессиональная гигиена</p></a>
          <a href="#"><p>Oртодонтия</p></a>
        </div>
        <div class="tip_text">
          <a href="#"><p>Хирургическая стоматология</p></a>
          <a href="#"><p>Ортопедическая стоматология</p></a>
          <a href="#"><p>Отбеливание</p></a>
        </div>
      </div>
      <button class="btn"><a href="{{ route('equipment') }}">Оснащениие</a></button>
    </div>
  </div>

  <!-- ------------------------------------------------- -->

  @if (count($doctors))
  <div class="container">
    <div class="Specialists">
      <h1 class="user_header">Команда</h1>

      <div class="team">

          @foreach ($doctors as $doctor)
          <a href="{{ route('doctors.show',$doctor->id) }}" style="text-decoration: none">
            <div class="team_box filters-nav" cardIndex="0">
              <img class="team_img" id="cardImage" src="{{ route('get_file',['path'=> $doctor->avatar]) }}" />
              <h2 class="team_titl" id="cardName">
                {{ "$doctor->name $doctor->surname" }}
              </h2>
              <h2 class="team_titl">
                {{ $doctor['middlename'] }}
              </h2>
              <p class="team_text">
                {{ $doctor['job_title'] }}
              </p>
            </div>
          </a> 
          @endforeach
          

      </div>
    </div>
  </div>
  @endif
@endsection