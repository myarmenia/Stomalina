@extends('layout.app')

@section('css')
@endsection
@section('content')
 <div class="www">
             <img src="{{ asset('images/photo3.png') }}"  width="100%" height="auto" />
            <div class="info">
                <p>Принимаем детей и взрослых</p>
                <p>Лечение под наркозом и седацией</p>
                <p>Лечение под микроскопом</p>
               <button class="btn"><a href="{{route('equipment')}}">Оснащение</a></button>
            </div>
        </div>
        <div class"box__btn">
            <button class="btn btn02"><a href="{{route('equipment')}}">Оснащение</a></button>
        </div>
<!---------------------------------------------------------------->
<!--<div class="slider">-->
        <!--<div class="slide active">-->
        <!--  <img src="{{ asset('images/photo3.png') }}" />-->
        <!--  <div class="info">-->
        <!--    <p>Принимаем детей и взрослых</p>-->
        <!--    <p>Лечение под наркозом и седацией</p>-->
        <!--    <p>Лечение под микроскопом</p>-->
        <!--    <button class="btn"><a href="{{route('equipment')}}">Оснащение</a></button>-->
        <!--  </div>-->
        <!--</div>-->
        
        <!--=================================-->
        <!--<div class="slide">-->
        <!--  <img src="{{ asset('images/photo2.png') }}" />-->
        <!--  <div class="info">-->
        <!--    <p>Принимаем детей и взрослых</p>-->
        <!--    <p>Лечение под наркозом и седацией</p>-->
        <!--    <p>Лечение под микроскопом</p>-->
        <!--    <button class="btn"><a href="{{route('equipment')}}">Оснащение</a></button>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="slide">-->
        <!--  <img src="{{ asset('images/photo1.png') }}" />-->
        <!--  <div class="info">-->
        <!--    <p>Принимаем детей и взрослых</p>-->
        <!--    <p>Лечение под наркозом и седацией</p>-->
        <!--    <p>Лечение под микроскопом</p>-->
        <!--    <button class="btn"><a href="{{route('equipment')}}">Оснащение</a></button>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="slide">-->
        <!--  <img src="{{ asset('images/photo4.png') }}" />-->
        <!--  <div class="info">-->
        <!--    <p>Принимаем детей и взрослых</p>-->
        <!--    <p>Лечение под наркозом и седацией</p>-->
        <!--    <p>Лечение под микроскопом</p>-->
        <!--    <button class="btn"><a href="{{route('equipment')}}">Оснащение</a></button>-->
        <!--  </div>-->
        <!--</div>-->
<!--<div class="a">-->

<!--  <div class="navigation">-->
    <!--<i class="fa fa-chevron-left prev-btn"></i>-->
    <!--<i class="fa fa-chevron-right next-btn"></i>-->
<!--  </div>-->
  <!--<div class="navigation-visibility">-->
  <!--  <div class="slide-icon active"></div>-->
  <!--  <div class="slide-icon"></div>-->
  <!--  <div class="slide-icon"></div>-->
  <!--  <div class="slide-icon"></div>-->
  <!--</div>-->
<!--</div>-->
<!--      </div>-->
<!--<div class="container">-->
<!--    <div class="the_user">-->
<!--      <h1 class="user_header">О нашей клинике</h1>-->
<!--      <div class="user_text">-->
<!--        <p>-Оказываем стоматологическую помощь с 2004 года</p>-->
<!--        <p class="p-1">-Принимаем детей и взрослых</p>-->
<!--        <p class="p-1">-Лечение под наркозом и седацией</p>-->
<!--        <p class="p-1">-Лечение под микроскопом</p>-->
<!--        <p class="p-1">-->
<!--          -Собственная зуботехническая лаборатория. Её наличие позволяет-->
<!--          выполнять работу в значительно меньшие-->
<!--        </p>-->
<!--        <p>сроки и по более низким ценам</p>-->
<!--        <p class="p-1">-Бесплатные парковочные места перед входом</p>-->
<!--        <p class="p-1">-->
<!--          -Современные и качественные материалы, инструменты, оборудование.-->
<!--          Подробнее об оснащении нашей клиники-->
<!--        </p>-->
<!--        <p>можно ознакомиться по ссылке ниже</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->

  <!-- ----------------------------------------------------------------------------------------------- -->

  <div class="container">
    <div class="the_user">
      <h1 class="user_header">Наши услуги</h1>
      <div class="doctor_text">
        <div class="tip_text">
          <p>Терапевтическая стоматология</p>
           <p>Профессиональная гигиена</p>
          <p>Oртодонтия</p>
        </div>
        <div class="tip_text">
        <p>Хирургическая стоматология</p>
         <p>Ортопедическая стоматология</p>
          <p>Отбеливание</p>
        </div>
      </div>
      <button class="btn"><a href="{{ route('treaty') }}">Стоимость</a></button>
    </div>
  </div>

  <!-- ------------------------------------------------- -->

  @if (count($doctors))
  <div class="container">
    <div class="Specialists">
      <h1 class="user_header" id="contacts_id">Команда</h1>

      <div class="team">

          @foreach ($doctors as $doctor)
          <a href="{{ route('doctors.show',$doctor->id) }}" style="text-decoration: none">
            <div class="team_box filters-nav" cardIndex="0">
              <img class="team_img" id="cardImage" src="{{ route('get_file',['path'=> $doctor->avatar]) }}" />
              <h2 class="team_titl" id="cardName">
                {{ "$doctor->surname $doctor->name " }}
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