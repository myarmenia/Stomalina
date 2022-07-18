@extends('layout.app')


@section('content')
<!--<div class="container">-->
<!--    <div class="header">-->
<!--        <div class="whole_document">-->
<!--            <div class="from_the_visit">-->
<!--                <div class="from_the_visit_text">-->
<!--                    <p>Заполнить</p>-->
<!--                    <p>документы перед</p>-->
<!--                    <p>первым визитом</p>-->
<!--                </div>-->
<!--                <div class="text_secondary">-->
<!--                    <div class="yellow">-->
<!--                       <i> Онлайн</i>-->
<!--                    </div>-->
<!--                    <div class="yellow_img">-->
<!--                        <img src="{{ asset('images/flag.svg') }}">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="box_text">-->
<!--            <p> Пожалуйста, внесите данные в форму. <br>-->
<!--                Документы будут полностью готовы к вашему приезду в клинику.</p>-->
<!--                <p> <b>Важно!</b> На первый визит с несовершеннолетним обязательно должны прийти <br> родители или законные представители (опекуны, усыновители или попечители).</p>-->
<!--                <p>Необходимо принести оригиналы документов: паспорт законного представителя и <br> паспорт или свидетельство о рождении ребенка/ постановление органов опеки/ <br>-->
<!--                    свидетельство о государственной регистрации акта усыновления ст. 125 СК РФ</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<!--<form action="{{ route('client.store') }}" method="POST">-->
<!--    @csrf-->
<!--  <div class="container">-->
<!--      <div class="user_login_div">-->
<!--        <div class="user_login">-->
<!--            <span class="user_title">Ваши данные (Данные родителя)</span>-->

<!--               <div class="user_login_box">-->
<!--                  <div class="user_login_input">-->
<!--                      <label for="">Фамилия</label>-->
<!--                      <input type="text" name="surname">-->
<!--                      @if ($errors->has('surname'))-->
<!--                       <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                          <strong>{{ $errors->first('surname') }}</strong>-->
<!--                       </span>-->
<!--                      @endif-->
<!--                  </div>-->
<!--                  <div class="user_login_input">-->
<!--                      <label for="">Имя</label>-->
<!--                      <input type="text" name="name">-->
<!--                      @if ($errors->has('name'))-->
<!--                      <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                         <strong>{{ $errors->first('name') }}</strong>-->
<!--                      </span>-->
<!--                     @endif-->
<!--                  </div>-->
<!--                  <div class="user_login_input">-->
<!--                      <label for="">Отчество</label>-->
<!--                      <input type="text" name="patronymic">-->
<!--                      @if ($errors->has('patronymic'))-->
<!--                      <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                         <strong>{{ $errors->first('patronymic') }}</strong>-->
<!--                      </span>-->
<!--                     @endif-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="user_login_box">-->
<!--                  <div class="user_login_input">-->
<!--                      <label for="">Дата рождения</label>-->
<!--                      <input type="date" name="dob">-->
<!--                      @if ($errors->has('dob'))-->
<!--                      <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                         <strong>{{ $errors->first('dob') }}</strong>-->
<!--                      </span>-->
<!--                     @endif-->
<!--                  </div>-->
<!--                  <div class="user_login_input">-->
<!--                      <label for="">Почта</label>-->
<!--                      <input type="email" name="email">-->
<!--                      @if ($errors->has('email'))-->
<!--                      <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                         <strong>{{ $errors->first('email') }}</strong>-->
<!--                      </span>-->
<!--                     @endif-->
<!--                  </div>-->
<!--                  <div class="user_login_input">-->
<!--                      <label for="">Ваш телефон</label>-->
<!--                      <input type="number" name="phone_number">-->
<!--                      @if ($errors->has('phone_number'))-->
<!--                      <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                         <strong>{{ $errors->first('phone_number') }}</strong>-->
<!--                      </span>-->
<!--                     @endif-->
<!--                  </div>-->
<!--               </div>-->

<!--        </div>-->
<!--        <div class="user_login">-->
<!--          <span class="user_title">Паспортные данные</span>-->
<!--          <div class="user_chckbox">-->
<!--              <input type="checkbox" name="foreign_passport" value="1">-->
<!--              <span>Паспорт иностранного образца</span>-->
<!--          </div>-->

<!--             <div class="user_login_box">-->
<!--                <div class="user_login_input">-->
<!--                    <label for="">Серия</label>-->
<!--                    <input type="text" name="passport_series">-->
<!--                    @if ($errors->has('passport_series'))-->
<!--                      <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                         <strong>{{ $errors->first('passport_series') }}</strong>-->
<!--                      </span>-->
<!--                     @endif-->
<!--                </div>-->
<!--                <div class="user_login_input  user_login_input_2">-->
<!--                    <label for="">Номер</label>-->
<!--                    <input type="number" name="passport_number">-->
<!--                    @if ($errors->has('passport_number'))-->
<!--                      <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                         <strong>{{ $errors->first('passport_number') }}</strong>-->
<!--                      </span>-->
<!--                     @endif-->
<!--                </div>-->

<!--             </div>-->
<!--             <div class="user_login_box">-->
<!--                <div class="user_login_input  user_login_input_2">-->
<!--                    <label for="">Выдан</label>-->
<!--                    <input type="text" name="passport_issued">-->
<!--                    @if ($errors->has('passport_issued'))-->
<!--                    <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                       <strong>{{ $errors->first('passport_issued') }}</strong>-->
<!--                    </span>-->
<!--                   @endif-->
<!--                </div>-->
<!--                <div class="user_login_input">-->
<!--                    <label for="">Дата выдачи</label>-->
<!--                    <input type="date" name="passport_d_issue">-->
<!--                    @if ($errors->has('passport_d_issue'))-->
<!--                    <span class="invalid-feedback" style="display: block;" role="alert">-->
<!--                       <strong>{{ $errors->first('passport_d_issue') }}</strong>-->
<!--                    </span>-->
<!--                   @endif-->
<!--                </div>-->

<!--             </div>-->
<!--      </div>-->
<!--      <div class="user_login">-->
<!--        <span class="user_title">Адрес регистрации</span>-->


<!--           <div class="user_login_box">-->
<!--              <div class="user_login_input">-->
<!--                  <label for="">город</label>-->
<!--                  <input type="text" name="registration[city]">-->
<!--              </div>-->
<!--              <div class="user_login_input  user_login_input_2">-->
<!--                  <label for="">улица</label>-->
<!--                  <input type="text" name="registration[street]">-->
<!--              </div>-->

<!--           </div>-->
<!--           <div class="user_login_box">-->
<!--              <div class="user_login_input">-->
<!--                  <label for="">дом</label>-->
<!--                  <input type="text" name="registration[house]">-->
<!--              </div>-->
<!--              <div class="user_login_input">-->
<!--                  <label for="">корп./стр.</label>-->
<!--                  <input type="text" name="registration[frame]">-->
<!--              </div>-->
<!--              <div class="user_login_input">-->
<!--                  <label for="">кв.</label>-->
<!--                  <input type="text" name="registration[quarter]">-->
<!--              </div>-->

<!--           </div>-->
<!--    </div>-->
<!--    <div class="user_login">-->
<!--        <span class="user_title">Адрес проживания</span>-->
<!--        <div class="user_chckbox">-->
<!--            <input type="checkbox">-->
<!--            <span>совпадает с адресом регистрации</span>-->
<!--        </div>-->

<!--           <div class="user_login_box">-->
<!--              <div class="user_login_input">-->
<!--                  <label for="">город</label>-->
<!--                  <input type="text" name="residence[city]">-->
<!--              </div>-->
<!--              <div class="user_login_input  user_login_input_2">-->
<!--                  <label for="">улица</label>-->
<!--                  <input type="text" name="residence[street]">-->
<!--              </div>-->

<!--           </div>-->
<!--           <div class="user_login_box">-->
<!--              <div class="user_login_input">-->
<!--                  <label for="">дом</label>-->
<!--                  <input type="text" name="residence[house]">-->
<!--              </div>-->
<!--              <div class="user_login_input">-->
<!--                  <label for="">корп./стр.</label>-->
<!--                  <input type="text" name="residence[frame]">-->
<!--              </div>-->
<!--              <div class="user_login_input">-->
<!--                  <label for="">кв.</label>-->
<!--                  <input type="text" name="residence[quarter]">-->
<!--              </div>-->

<!--           </div>-->
<!--    <button class="user_btn">Далее</button>-->
<!--    </div>-->
<!--      </div>-->
<!--</form>-->
<div class="cotainer">

    <div class="text_accord">
        <p>
            В нашей клинике есть возможность оказывать стоматологическую помощь детям и взрослым с использованием
            микроскопа, наркоза, седации закисью азота и внутривенной седации. Мы используем современные и
            качественные материалы, инструменты и оборудование.
        </p>

        <p>
            Мы стараемся делать так, чтобы приём для пациента у нас был максимально комфортным.
        </p>
    </div>


<div class="accordion">
    <div class="accordion_item">
        <h2 class="accordion_titl">Общее</h2>
        <div class="accordion_answer">
                    
            
            <div class="price">
              <table>
                  <tr>
                      <th>Первичный прием, осмотр и консультация врача-стоматолога</th>
                      <td>1,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Повторный осмотр</th>
                      <td>0.00 руб </td>
                  </tr>
                  <tr>
                      <th>Панорамная рентгенография всего зубного ряда (ортопантомограмма)</th>
                      <td>1,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Прицельный снимок зуба</th>
                      <td>300.00 руб </td>
                  </tr>
                  <tr>
                      <th>Прицельный снимок зуба</th>
                      <td>500.00 руб </td>
                  </tr>
                    <tr>
                      <th>Полирование и шлифование реставрации</th>
                      <td>400.00 руб </td>
                  </tr>
              </table>
            </div>
        </div>
    </div>
    
    
        <div class="accordion_item">
        <h2 class="accordion_titl">   Анестезиология</h2>
        <div class="accordion_answer">
                    
<<<<<<< HEAD
            
=======
        
>>>>>>> a67bdeb99950764fd9d056b8ea9ccf6be9d8ca8a
            <div class="price">
              <table>
                  <tr>
                      <th>      Седация закисью азота до 30 минут</th>
                      <td>3,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>      Седация закисью азота до 60 минут</th>
                      <td>3,800.00 руб </td>
                  </tr>
                  <tr>
                      <th>      Общая многокомпонентная сбалансированная анестезия на основе Севофлурана (Севорана) 1 час</th>
                      <td>17,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>      В/в седация 1 час</th>
                      <td>17,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>      Анестезия инфильтрационная</th>
                      <td>1,000.00 руб </td>
                  </tr>
                    <tr>
                      <th>      Анестезия проводниковая</th>
                      <td>1,000.00 руб </td>
                  </tr>
                    <tr>
                      <th>       Анестезия интралигаментальная</th>
                      <td>800.00 руб </td>
                  </tr>
                    <tr>
                      <th>      Аппликационная анестезия</th>
                      <td>350.00 руб </td>
                  </tr>
              </table>
            </div>
        </div>
    </div>
    
    
    
    
    
    <div class="accordion_item">
        <h2 class="accordion_titl"> Детская стоматология</h2>
 
        <div class="accordion_answer">
                    
        
            <div class="price">
              <table>
                   <tr>
                      <th class="sec" colspan="2">      Общее</th>
                  </tr>
                  <tr>
                      <th>         Первичный прием, осмотр и консультация детского стоматолога</th>
                      <td>1,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Адаптационный прием ребенка у детского стоматолога</th>
                      <td>1,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>          Адаптационный прием ребенка у детского стоматолога</th>
                      <td>1,500.00 руб </td>
                  </tr>
                   <tr>
                      <th class="sec" colspan="2">Профессиональная гигиена, профилактика</th>
                  </tr>
                  <tr>
                      <th>Временный прикус (чистка, щетка, паста, полировка, ремотерапия)</th>
                      <td>4,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Сменный прикус (чистка, ультразвук, щетка, паста, полировка, ремотерапия) </th>
                      <td>5,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Постоянный прикус (чистка, ультразвук, щетка, паста, Air Flow, полировка, ремотерапия)</th>
                      <td>6,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Герметизация фиссур</th>
                      <td>1,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Глубокое фторирование эмали (1 зуб)</th>
                      <td>200.00 руб </td>
                  </tr>
                    <tr>
                      <th class="sec" colspan="2">      Лечение пульпита временного зуба</th>
                  </tr>
                   <th>         Пульпотомия (наложение IMR)</th>
                      <td>2,500.00 руб </td>
                  </tr>
                   <th>         Пульпотомия </th>
                      <td>2,000.00 руб </td>
                  </tr>
                   <th>          Лечение 1 канала временного зуба </th>
                      <td>1,200.00 руб </td>
                  </tr>
                    <th>         Наложение девитализирующей пасты </th>
                      <td>400.00 руб </td>
                  </tr>
                    <th>         Наложение лечебной повязки на устья каналов</th>
                      <td>600.00 руб </td>
                  </tr>
                   <th>         Временная пломба</th>
                      <td>600.00 руб </td>
                  </tr>
                   <th>         Восстановление зуба светоотверждаемым материалом Estelite  1 класс</th>
                      <td>5,000.00 руб </td>
                  </tr>
                   <th>          Восстановление зуба светоотверждаемым материалом Estelite 2 класс</th>
                      <td>3,900.00 руб </td>
                  </tr>
                    <th>         Восстановление зуба коронкой ЗМ</th>
                      <td>6,500.00 руб </td>
                  </tr>
                    <tr>
                      <th class="sec" colspan="2">       Лечение кариеса</th>
                  </tr>
                   <th>         Лечение кариеса в стадии пятна ICON</th>
                      <td>2,500.00 руб </td>
                  </tr>
                    <th>         Восстановление зуба светоотверждаемым материалом Estelite 1 класс</th>
                      <td>5,000.00 руб </td>
                  </tr>
                    <th>         Восстановление зуба светоотверждаемым материалом Estelite 2 класс</th>
                      <td>8,500.00 руб </td>
                  </tr>
                   <th>         Лечение кариеса центральной группы зубов с реставрацией </th>
                      <td>8,300.00 руб </td>
                  </tr>
                   <th>          Лечебная прокладка</th>
                      <td>500.00 руб </td>
                  </tr>
                    <th>         Изолирующая прокладка</th>
                      <td>250.00 руб </td>
                  </tr>
                   <tr>
                      <th class="sec" colspan="2">      Лечение пульпита постоянного зуба</th>
                  </tr>
                   <th>          Лечение пульпита постоянного зуба с несформированными корнями </th>
                      <td>2,500.00 руб </td>
                  </tr>
                   <th>           Лечение пульпита постоянного зуба со сформированными корнями (1 канал)</th>
                      <td>5,500.00 руб </td>
                  </tr>
                    <th>          Лечение пульпита постоянного зуба со сформированными корнями (2 канала)</th>
                      <td>8,500.00 руб </td>
                  </tr>
                    <th>             Лечение пульпита постоянного зуба со сформированными корнями (3 канала)</th>
                      <td>11,500.00 руб </td>
                  </tr>
                   <th>          Лечение пульпита постоянного зуба со сформированными корнями (4 канала)</th>
                      <td>12,900.00 руб </td>
                  </tr>
                    <th>         Временное пломбирование 1 канала пастой CALASEPT/METAPEX</th>
                      <td>800.00 руб </td>
                  </tr>
                     <tr>
                      <th class="sec" colspan="2"> Лечение периодонтита постоянного зуб</th>
                  </tr>
                    <th>          Лечение периодонтита постоянного зуба с несформированными корнями (1 канал)</th>
                      <td>4,250.00 руб </td>
                  </tr>
                     <th>         Лечение периодонтита постоянного зуба с несформированными корнями (2 канала)</th>
                      <td>5,100.00 руб </td>
                  </tr>
                    <th>          Лечение периодонтита постоянного зуба с несформированными корнями (3 канала)</th>
                      <td>7,500.00 руб </td>
                  </tr>
                     <th>         Лечение периодонтита постоянного зуба с несформированными корнями (4 канала)</th>
                      <td>9,100.00 руб </td>
                  </tr>
                   <th>         Лечение периодонтита постоянного зуба со сформированными корнями (1 канал)</th>
                      <td>7,300.00 руб </td>
                  </tr>
                    <th>          Лечение периодонтита постоянного зуба со сформированными корнями (2 канала)</th>
                      <td>10,500.00 руб </td>
                  </tr>
                   <th>         Лечение периодонтита постоянного зуба со сформированными корнями (3 канала)</th>
                      <td>12,000.00 руб </td>
                  </tr>
                  <th>          Лечение периодонтита постоянного зуба со сформированными корнями (4 канала)</th>
                      <td>16,600.00 руб </td>
                  </tr>
                   <tr>
                      <th class="sec" colspan="2">       Лечение стоматита</th>
                  </tr>
                    <th>         Первое посещение</th>
                      <td>1,500.00 руб </td>
                  </tr>
                    <th>         Повторное посещение</th>
                      <td>500.00 руб </td>
                  </tr>
                    <tr>
                      <th class="sec" colspan="2">       Хирургия</th>
                  </tr>
                    <th>         Удаление временного зуба с физиологической резорбцией корня</th>
                      <td>2,500.00 руб </td>
                  </tr>
                     <th>          Удаление временного  зуба простое</th>
                      <td>3,000.00 руб </td>
                  </tr>
                   <th>          Удаление временного зуба сложное</th>
                      <td>4,500.00 руб </td>
                  </tr>
                    <th>          Подсечение уздечки языка у ребенка до 3-х месяцев</th>
                      <td>9,000.00 руб </td>
                  </tr>
            
              </table>
            </div>
        </div>
    </div>
    <div class="accordion_item">
        <h2 class="accordion_titl">Гигиена и отбеливание</h2>
        <div class="accordion_answer">
                    
         
            <div class="price">
              <table>
                  <tr>
                      <th>      Профессиональная гигиена (ультразвук+ Air-flow+полирование+покрытие)</th>
                      <td>6,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>      Профессиональная гигиена с брекетами(ультразвук+Air-Flow+полирование+покрытие)</th>
                      <td>6,500.00 руб </td>
                  </tr>
                  <tr>
                    <th>      Отбеливание зубов Zoom 4</th>
                    <td>19,000.00 руб </td>
                </tr>
                  <tr>
                      <th>      Система для домашнего отбеливания Nite White (1 шприц-2,4ml, 22%)</th>
                      <td>1,900.00 руб </td>
                  </tr>
                  <tr>
                      <th>Каппа для домашнего отбеливания 1 челюсть</th>
                      <td>3,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Удаление зубного налета AIR - FLOW в области 1 зуба</th>
                      <td>350.00 руб </td>
                  </tr>
                  <tr>
                      <th>Удаление зубных отложений ультразвуком в области 1 зуба + полировка</th>
                      <td>350.00 руб </td>
                  </tr>
                  <tr>
                      <th>Покрытие одного зуба препаратом эмаль-герметизирующий 
                        ликвидом/десенсетайзером/фторлаком</th>
                      <td>350.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечебные аппликации</th>
                      <td>350.00 руб </td>
                  </tr>
                  <tr>
                      <th>Герметизация фиссур</th>
                      <td>3,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Постановка стразы</th>
                      <td>2,000.00 руб </td>
                  </tr>
              </table>
            </div>
        </div>
    </div>
    <div class="accordion_item">
        <h2 class="accordion_titl">Терапия</h2>
        <div class="accordion_answer">
                    
           
            <div class="price">
              <table>
                  <tr>
                      <th class="sec" colspan="2">Кариес</th>
                  </tr>
                  <tr>
                      <th>OptraGate</th>
                      <td>500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Optidam/коффердам</th>
                      <td>1,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение поверхностного кариеса светоотверждаемым материалом Estelite</th>
                      <td>4,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение среднего кариеса светоотверждаемым материалом Estelite</th>
                      <td>5,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение глубокого кариеса светоотверждаемым материалом Estelite</th>
                      <td>6,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение кариеса центральной группы зубов с реставрацией</th>
                      <td>9,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение кариеса жевательной группы зубов с реставрацией</th>
                      <td>8,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение клиновидного дефекта</th>
                      <td>4,800.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение поверхностного кариеса ICON</th>
                      <td>3,200.00 руб </td>
                  </tr>
                  <tr>
                      <th>Наложение лечебной прокладки при глубоком кариесе</th>
                      <td>1,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Постановка пломбы при пульпите/периодонтите</th>
                      <td>4,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Восстановление зуба под ортопедическую конструкцию</th>
                      <td>4,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Временная пломба</th>
                      <td>600.00 руб </td>
                  </tr>
                  <tr>
                      <th>Установка анкерного штифта</th>
                      <td>3,200.00 руб </td>
                  </tr>
                  <tr>
                      <th>Установка стекловолоконного штифта</th>
                      <td>2,800.00 руб </td>
                  </tr>
                  <tr>
                      <th>Извлечение анкерного штифта или вкладки</th>
                      <td>3,200.00 руб </td>
                  </tr>
                  <tr>
                      <th class="sec" colspan="2">Эндодонтическое лечение</th>
                  </tr>
                  <tr>
                      <th class="sec" colspan="2">Пульпит</th>
                  </tr>
                  <tr>
                      <th>Лечение 1 канала</th>
                      <td>9,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение 2 каналов</th>
                      <td>13,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение 3 каналов</th>
                      <td>18,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение 4 каналов</th>
                      <td>21,600.00 руб </td>
                  </tr>
                  <tr>
                      <th>+Восстановление пломбой</th>
                      <td>4,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>+Восстановление вкладкой КХС</th>
                      <td>4,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>+Восстановление металлокерамической коронкой</th>
                      <td>8,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>+Восстановление коронкой из диоксида циркония</th>
                      <td>25,000.00 руб </td>
                  </tr>
                  <tr>
                    <th class="sec" colspan="2">Периодонтит</th>
                </tr>
                  <tr>
                    <th>Лечение 1 канала</th>
                    <td>12,000.00 руб</td>
                </tr>
                  <tr>
                    <th>Лечение 2 каналов</th>
                    <td>14,000.00 руб</td>
                </tr>
                  <tr>
                    <th>Лечение 3 каналов</th>
                    <td>19,500.00 руб</td>
                </tr>
                  <tr>
                    <th>Лечение 4 каналов</th>
                    <td>22,000.00 руб</td>
                </tr>
                  <tr>
                    <th>+Восстановление пломбой</th>
                    <td>4,500.00 руб</td>
                </tr>
                  <tr>
                    <th>+Восстановление вкладкой КХС</th>
                    <td>4,000.00 руб</td>
                </tr>
               
                  <tr>
                    <th>Распломбировка зуба 2 канального</th>
                    <td>3,800.00 руб</td>
                </tr>
                  <tr>
                    <th>Распломбировка зуба 3 канального</th>
                    <td>4,200.00 руб</td>
                </tr>
                  <tr>
                    <th>Распломбировка зуба 4 канального</th>
                    <td>4,800.00 руб</td>
                </tr>
                  <tr>
                    <th>Наложение девитализирующей пасты</th>
                    <td>600.00 руб</td>
                </tr>
                  <tr>
                    <th>Наложение лечебной повязки на устья каналов</th>
                    <td>400.00 руб</td>
                </tr>
                  <tr>
                    <th>Закрытие перфораций и трещин материалом ProRoot</th>
                    <td>2,800.00 руб</td>
                </tr>
                  <tr>
                    <th>Извлечение инородного тела из канала</th>
                    <td>3,500.00 руб</td>
                </tr>
                  <tr>
                    <th>Коагуляция десневого сосочка</th>
                    <td>400.00 руб</td>
                </tr>
              </table>
            </div>
        </div>
    </div>
    <div class="accordion_item">
        <h2 class="accordion_titl">Пародонтология</h2>
        <div class="accordion_answer">
                    
          
            <div class="price">
              <table>
                  <tr>
                      <th>Удаление подвижного зуба (AIIAIII)</th>
                      <td>2,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Открытый кюретаж в области 1-го зуба</th>
                      <td>2,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Закрытый кюретаж в области 1-го зуба</th>
                      <td>1,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>      Закрытый кюретаж в области 1-го зуба</th>
                      <td>1,500.00 руб </td>
                  </tr>
                 
                  <tr>
                      <th>Медикаментозная обработка пародонтального кармана</th>
                      <td>750.00 руб </td>
                  </tr>
                  <tr>
                      <th>Наложение фиксирующей лечебной повязки на 1 зуб</th>
                      <td>300.00 руб </td>
                  </tr>
                  <tr>
                      <th>Шинирование 1 зуба</th>
                      <td>1,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение стоматита (500-2000 руб.)</th>
                      <td>0.00 руб </td>
                  </tr>
                  <tr>
                      <th>Вскрытие пародонтального абсцесса</th>
                      <td>1,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Глубокий скейлинг, выравнивание поверхности корней одного сегмента</th>
                      <td>5,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Пластическое закрытие рецессии в области 1 зуба</th>
                      <td>10,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лоскутная операция в области 1 зуба</th>
                      <td>3,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лоскутная операция в области 1 сектора</th>
                      <td>15,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Гингивопластика в области 1-го зуба, хирургическое удлиннение клинической коронки</th>
                      <td>2,000.00 руб </td>
                  </tr>
              </table>
            </div>
        </div>
    </div>
    <div class="accordion_item">
        <h2 class="accordion_titl">Хирургия</h2>
 
        <div class="accordion_answer">
                    
            
            <div class="price">
              <table>
                  <tr>
                      <th class="sec" colspan="2">Имплантация</th>
                  </tr>
                  <tr>
                      <th>Установка импланта Straumann</th>
                      <td>54,000.00 руб </td>
                  </tr>
                
                  <tr>
                      <th>Установка импланта Straumann SLActive</th>
                      <td>59,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Установка импланта BioHorizons </th>
                      <td>35,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Установка импланта Dentium </th>
                      <td>25,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Установка мини-имплантата</th>
                      <td>12,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Изготовление хирургического шаблона 1 челюсть</th>
                      <td>14.000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Установка формирователя десны</th>
                      <td>8.000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Закрытый синус-лифтинг</th>
                      <td>25.000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Открытый синус-лифтинг</th>
                      <td>38.000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Формирование альвеолярного отростка после сложного удаления (12000-15000 руб.)</th>
                      <td>0.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Формирование альвеолярного отростка в целях установки импланта (20000-25000 руб.)</th>
                      <td>0.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Забор костного блока</th>
                      <td>35,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Остеопластика с аутогенной костной стружкой включая забор материала</th>
                      <td>10,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Остеопластика с использованием материала Bio-Oss (10000-15000 руб.)</th>
                      <td>0.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Установки мембраны</th>
                      <td>10,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Остеопластика с использованием материала Bio-Oss (10000-15000 руб.)</th>
                      <td>12,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Использование мембраны 13*25 Bio-Gide</th>
                      <td>11,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Использование мембраны 16*22 Bio-Gide</th>
                      <td>13,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Использование мембраны 25*25 Bio-Gide</th>
                      <td>14,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Использование мембраны 30*40 Bio-Gide</th>
                      <td>20,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Использование остеопластического материала Apatos</th>
                      <td>5,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Использование остеопластического материала Bio-Oss 0,25</th>
                      <td>7,900.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Использование остеопластического материала Bio-Oss 0,5</th>
                      <td>8,605.00 руб </td>
                  </tr>
                  
                  <tr>
                      <th>Использование остеопластического материала Bio-Oss 1,0</th>
                      <td>16,000.00 руб </td>
                  </tr>
                  <tr>
                      <th> Использование остеопластического материала Mucograft 15x20 мм</th>
                      <td>17,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование остеопластического материала Mucograft 20х30 мм</th>
                      <td>20,700.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование материала Emdogain 0.15мл</th>
                      <td>9,800.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование материала Emdogain 0.3мл</th>
                      <td>17,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование материала Emdogain 0.7мл</th>
                      <td>20,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование остеопластического материала Evolution 20x20 мм тонкая</th>
                      <td>12,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование остеопластического материала Evolution резорбируемая 30x30 мм</th>
                      <td>14,300.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование остеопластического материала Evolution резорбируемая 25x35 мм 
                        тонкая овальная толстая (OsteoBiol)</th>
                      <td>12,650.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование остеопластического материала Evolution резорбируемая 30x30 мм 
                        тонкая</th>
                      <td>14,700.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование остеопластического материала Evolution резорбируемая 25x35 мм 
                        тонкая овальная тонкая (OsteoBiol)</th>
                      <td>12,650.00 руб </td>
                  </tr>
                  <tr>
                      <th>Пины для фиксации мембраны 1 шт.</th>
                      <td>3,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Увелечение зоны прикрепленной десны в области 1-го имплантата</th>
                      <td>6,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Удаление имплантата установленного сторонней клиникой ( от 11000 руб.)</th>
                      <td>0.00 руб </td>
                  </tr>
                  <tr>
                      <th>Осмотр после операционного вмешательства</th>
                      <td>0.00 руб </td>
                  </tr>
                  <tr>
                      <th>Удаление осколка зуба</th>
                      <td>1,000.00 руб </td>
                  </tr>
                  
                  <tr>
                      <th>Удаление однокорневого зуба</th>
                      <td>4,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Удаление многокорневого зуба простое</th>
                      <td>4,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Удаление многокорневого зуба сложное</th>
                      <td>5,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Удаление 8-го зуба без </th>
                      <td>7,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>      Удаление ретинированного зуба (не прорезавшийся)</th>
                      <td>10,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Закрытие соустья с гайморовой пазухой</th>
                      <td>4,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Заполнение лунки, костного деффекта остеопластическим материалом 
                        (без учета стоимости материала)</th>
                      <td>1,000.00 руб </td>
                  </tr>
                  <tr>
                      <th> Лечение перекоронита</th>
                      <td>1,500.00 руб </td>
                  </tr>
                    <tr>
                      <th>      Лечение альвеолита</th>
                      <td>1,600.00 руб </td>
                  </tr>
                  <tr>
                      <th>Лечение периостита</th>
                      <td>1,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>  Удаление костного экзостоза в области 1 зуба</th>
                      <td>500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Удаление костного экзостоза в области нескольких зубов</th>
                      <td>4,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>Цистэктомия</th>
                      <td>4,500.00 руб </td>
                  </tr>
                  <tr>
                      <th> Наложение 1 шва</th>
                      <td>400.00 руб </td>
                  </tr>
                  <tr>
                      <th>Снятие 1 шва для пациентов сторонней клиники</th>
                      <td>250.00 руб </td>
                  </tr>
                  <tr>
                      <th>Снятие 1 шва для пациентов нашей клиники</th>
                      <td>0.00 руб </td>
                  </tr>
                  <tr>
                      <th>Расщепление костного гребня в области 1 зуба</th>
                      <td>11,200.00 руб </td>
                  </tr>
              
                  <tr>
                      <th>Расщепление костного гребня в обласи нескольких зубов</th>
                      <td>30,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Пластика уздечки языка</th>
                      <td>9,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Пластика уздечки верхней, нижней губы</th>
                      <td>9,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Углубление преддверия полости рта в области 1-2 зубов</th>
                      <td>6,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Углубление преддверия полости рта в области 1 сегмента</th>
                      <td>10,000.00 руб </td>
                  </tr>
                  <tr>
                      <th> Углубление преддверия полости рта в области 1 челюсти</th>
                      <td>15,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Пластика прикрепленной десны свободным соединительно-тканным трансплантатом (в области одного зуба)</th>
                      <td>15,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>  Пластика прикрепленной десны свободным соединительно-тканным трансплантатом (в области двух зубов)</th>
                      <td>22,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Пластика десны в области 1 зуба, имплантата местными тканями</th>
                      <td>10,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Забор свободного десневого трансплантата</th>
                      <td>5,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Вправление вывиха нижней челюсти</th>
                      <td>4,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Резекция верхушки корня</th>
                      <td>7,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Удаление инородного тела из верхнечелюстной пазухи</th>
                      <td>25,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Иссечение ретенционной кисты</th>
                      <td>5,000.00 руб </td>
                  </tr>
                  <tr>
                      <th> Гемисекция</th>
                      <td>2,700.00 руб </td>
                  </tr>
                  <tr>
                      <th>Забор соединительно-тканного трансплантата</th>
                      <td>7,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Использование материалов для хирургической обработки лунки после удаления зуба</th>
                      <td>1,000.00 руб </td>
                  </tr>
                   <tr>
                      <th>      Удаление доброкачественного новообразования</th>
                      <td>9,500.00 руб </td>
                  </tr>
              </table>
            </div>
        </div>
    </div>
    <div class="accordion_item">
        <h2 class="accordion_titl">Ортопедия</h2>
        <div class="accordion_answer">
                    
           
            <div class="price">
              <table>
                  <tr>
                      <th class="sec" colspan="2"> Диагностика</th>
                  </tr>
                  <tr>
                      <th>         Оттиск альгинатный</th>
                      <td>750.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Оттиск силиконовый</th>
                      <td>1,500.00 руб </td>
                  </tr>
                  <tr>
                      <th>         Оттиск поливинилсилоксановый</th>
                      <td>2,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Диагностическая модель (1 челюсть)</th>
                      <td>1,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Индивидуальная ложка</th>
                      <td>1,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Восковое моделирование под временную коронку 1 зуб</th>
                      <td>500.00 руб </td>
                  </tr>
                  <tr>
                      <th> Восковое планирование 1 зуб</th>
                      <td>1,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Прикусной шаблон</th>
                      <td>1,500.00 руб </td>
                  </tr>
                  <tr>
                      <th class="sec" colspan="2">Съемное протезирование</th>
                  </tr>
               
                  <tr>
                      <th>Полный съёмный пластиночный протез (нейлоновый)</th>
                      <td>29,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Нейлоновый протез Quadrotti</th>
                      <td>30,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Полный съёмный протез Acry-Free</th>
                      <td>29,000.00 руб </td>
                  </tr>
                 
                  <tr>
                      <th>Частичный съёмный нейлоновый протез или Acry-Free</th>
                      <td>29,000.00 руб </td>
                  </tr>
                  <tr>
                      <th>Временный съемный протез, иммедиат протез, "бабочка"</th>
                      <td>10,000.00 руб </td>
                  </tr>
                  <tr>
                      <th class="sec" colspan="2">Несъемное протезирование</th>
                  </tr>
                 
                  <tr>
                      <th>         Керамическая коронка на каркасе из диоксида циркония</th>
                      <td>25,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>         Керамическая накладка Emax</th>
                      <td>25,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>         Культевая вкладка из драг.металла (без учета материала)</th>
                      <td>10,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>         Культевая вкладка КХС</th>
                      <td>7,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>Вкладка из серебряно-палладиевого сплава (1-канальный зуб) без учета материала (от 10000 руб.)</th>
                      <td>25,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>         Керамический винир E-MAX</th>
                      <td>25,000.00 руб</td>
                  </tr>
               
                  <tr>
                      <th>         Временная коронка изготовленная лабораторным методом</th>
                      <td>1,700.00 руб</td>
                  </tr>
                  <tr>
                      <th>         Временная коронка изготовленная прямым методом</th>
                      <td>2,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>          Нанесение десневой массы в области одного зуба</th>
                      <td>1,500.00 руб</td>
                  </tr>
                    <tr>
                      <th class="sec" colspan="2">      Протезирование с опорой на имплантаты</th>
                  </tr>
                   <tr>
                      <th class="sec" colspan="2">             Циркониевые коронки</th>
                  </tr>
                  
                  
                  
                  
                  
                  
                  <tr>
                      <th>            Цельноциркониевая коронка на имплантате с нанесением керамики Straumann</th>
                      <td>35,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Цельноциркониевая коронка (промежуточная часть) на имплантате с нанесением керамики Straumann</th>
                      <td>28,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>             Цельноциркониевая коронка на  винтовой фиксации</th>
                      <td>37,000.00 руб</td>
                  </tr>
                  
                    <tr>
                      <th class="sec" colspan="2">          Другое</th>
                  </tr>
                  
                  
                  
                  
                  
                  <tr>
                      <th>            Абатмент Dentium</th>
                      <td>6,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>             Аналог имплантата, трансфер Dentium</th>
                      <td>10,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Абатмент BioHorizons</th>
                      <td>6,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Аналог имплантата, трансфер BioHorizons</th>
                      <td>10,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Абатмент Straumann</th>
                      <td>16,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Аналог имплантата, трансфер Straumann</th>
                      <td>12,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Временный абатмент</th>
                      <td>5,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Временная коронка на импланте из армированной пластмассы</th>
                      <td>18,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Съемный протез балочной конструкции с фиксацией на четырех имплантах  типа «Bredent» на системах "Straumann", BioHorizons. Dentium</th>
                      <td>215,000.00 руб</td>
                  </tr>
                    <tr>
                      <th>            Съемный протез балочной конструкции с фиксацией на шести имплантах 
и двух замках типа «Bredent» на системах "Straumann"</th>
                      <td>240,000.00 руб</td>
                  </tr>
                  
                 
                  <tr>
                      <th>            Изготовление трансфер-чека</th>
                      <td>1,200.00 руб</td>
                  </tr>
                  <tr>
                      <th>  Металлокерамическая коронка на импланте промежуточная часть Straumann</th>
                      <td>20,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Временная промежуточная коронка на импланте из армированной пластмассы</th>
                      <td>10,000.00 руб</td>
                  </tr>
                  
                   <tr>
                      <th class="sec" colspan="2">          Починка и коррекция съемных протезов</th>
                  </tr>
                  
                  
                  
                  
                  
                  
                  
                  
                  <tr>
                      <th>            Коррекция съемного протеза, изготовленного в другой клинике</th>
                      <td>2,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Приварка одного элемента в съемном протезе 1-го зуба</th>
                      <td>3,500.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Приварка 1-го кламмера</th>
                      <td>2,500.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Приварка 1 зуба в нейлоновый протез</th>
                      <td>3,500.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Перебазировка съемного, бюгельного акрилового протеза прямым способом</th>
                      <td>4,500.00 руб</td>
                  </tr>
                  <tr>
                      <th>             Перебазировка съемного, бюгельного акрилового протеза не прямым способом</th>
                      <td>5,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Замена втулки аттачмента (2 штуки)</th>
                      <td>5,500.00 руб</td>
                  </tr>
<<<<<<< HEAD
                
=======
                  <tr>
                      <th>Замена втулки аттачмента</th>
                      <td>3,500.00 RU</td>
                  </tr>
                  <tr>
                      <th>Починка съемного пластиночного протеза</th>
                      <td>2,500.00 RU</td>
                  </tr>
                  <tr>
                      <th>Промежуточные этапы</th>
                      <td></td>
                  </tr>
                  <tr>
                      <th>Препарирование 1-го зуба</th>
                      <td>500.00 RU</td>
                  </tr>
                  <tr>
                      <th>Фиксация временной коронки</th>
                      <td>300.00 RU</td>
                  </tr>
                  <tr>
                      <th> Фиксация культевой вкладки</th>
                      <td>500.00 RU</td>
                  </tr>
                  <tr>
                      <th> Индивидуальная ложка</th>
                      <td>1,500.00 RU</td>
                  </tr>
                  <tr>
                      <th>Снятие штампованной коронки</th>
                      <td>1,000.00 RU</td>
                  </tr>
                  <tr>
                      <th>Снятие коронки цельнолитой, металлокерамической, диоксид циркония</th>
                      <td>1,500.00 RU</td>
                  </tr>
                  <tr>
                      <th>  Моделирование прикуса с применением лицевой дуги</th>
                      <td>4,000.00 RU</td>
                  </tr>
                  <tr>
                      <th>Изготовление каппы при бруксизме</th>
                      <td>3,000.00 RU</td>
                  </tr>
              </table>
            </div>
        </div>
    </div>
    <div class="accordion_item">
        <h2 class="accordion_titl">   Детская стоматология</h2>
        <div class="accordion_answer">
                    
            <!--<div class="work ">-->
                
            <!--    <h1>цена</h1>-->
            <!--</div>-->
            <div class="price">
              <table>
>>>>>>> a67bdeb99950764fd9d056b8ea9ccf6be9d8ca8a
                  <tr>
                      <th>            Починка съемного пластиночного протеза</th>
                      <td>4,500.00 руб</td>
                  </tr>
                    <tr>
                      <th class="sec" colspan="2">         Промежуточные этапы</th>
                  </tr>
                  
                  
                  
                  <tr>
                      <th>             Препарирование 1-го зуба</th>
                      <td>500.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Фиксация постоянной коронки</th>
                      <td>800.00 руб</td>
                  </tr>
               
                  <tr>
                      <th>            Фиксация временной коронки</th>
                      <td>500.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Фиксация культевой вкладки</th>
                      <td>800.00 руб</td>
                  </tr>
                  <tr>
                      <th>             Индивидуальная ложка</th>
                      <td>2,500.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Снятие штампованной коронки</th>
                      <td>1,500.00 руб</td>
                  </tr>
                  <tr>
                      <th>             Снятие коронки цельнолитой, металлокерамической, диоксид циркония</th>
                      <td>2,000.00 руб</td>
                  </tr>
                  <tr>
                      <th>            Использование ретракционной нити</th>
                      <td>200.00 руб</td>
                  </tr>
                  
                  
                  
                  
                  
                  <!--<tr>-->
                  <!--    <th>Абатмент "NOBEL"</th>-->
                  <!--    <td>13,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Аналог имплантата, трансфер NOBEL</th>-->
                  <!--    <td>10,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th> Временный абатмент</th>-->
                  <!--    <td>5,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th> Временная коронка на импланте из армированной пластмассы</th>-->
                  <!--    <td>18,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Съемный протез балочной конструкции с фиксацией на четырех имплантах</th>-->
                  <!--    <td>172,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>  Съемный протез балочной конструкции с фиксацией на шести имплантах</th>-->
                  <!--    <td>184,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Съемный протез балочной конструкции с фиксацией на четырех имплантах и двух замках на системах "NOBEL", "Astra-Tech"</th>-->
                  <!--    <td>223,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Съемный протез балочной конструкции с фиксацией на шести имплантах и двух замках типа на системах "NOBEL", "Astra-Tech"</th>-->
                  <!--    <td>239,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th> Съемный протез балочной конструкции с фиксацией на четырех имплантах и двух замках типа «Bredent» на системах "NOBEL", "Astra Tech</th>-->
                  <!--    <td>271,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th> Съемный протез балочной конструкции с фиксацией на шести имплантах и двух замках типа «Bredent» на системах "NOBEL", "Astra-Tech"</th>-->
                  <!--    <td>197,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>  Съемный протез балочной конструкции с фиксацией на четырех имплантах и двух замках типа «Bredent» на системах "Straumann"</th>-->
                  <!--    <td>215,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th> Съемный протез балочной конструкции с фиксацией на шести имплантах -->
                  <!--      и двух замках типа «Bredent» на системах "Straumann"</th>-->
                  <!--    <td>240,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th> Нанесение десневой массы на конструкцию (1 ед.)</th>-->
                  <!--    <td>900.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Изготовление трансфер-чека</th>-->
                  <!--    <td>1,200.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th> Временная промежуточная коронка на импланте из армированной пластмассы</th>-->
                  <!--    <td>10,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th class="sec" colspan="2"> Починка и коррекция съемных протезов</th>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Замена нейлонового колпачка  в съемном балочном протезе на имплантатах</th>-->
                  <!--    <td>2,500.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Коррекция съемного протеза</th>-->
                  <!--    <td>1,500.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Приварка одного элемента в съемном протезе 1-го зуба</th>-->
                  <!--    <td>2,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Приварка 1-го кламмера</th>-->
                  <!--    <td>2,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>            Приварка 1 зуба в нейлоновый протез</th>-->
                  <!--    <td>3,500.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Перебазировка съемного, бюгельного акрилового протеза прямым способом</th>-->
                  <!--    <td>3,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Перебазировка съемного, бюгельного акрилового протеза не прямым способом</th>-->
                  <!--    <td>5,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Силиконовая прокладка</th>-->
                  <!--    <td>1,800.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Замена втулки аттачмента</th>-->
                  <!--    <td>3,500.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Починка съемного пластиночного протеза</th>-->
                  <!--    <td>2,500.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th class="sec" colspan="2">Промежуточные этапы</th>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Препарирование 1-го зуба</th>-->
                  <!--    <td>500.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Фиксация временной коронки</th>-->
                  <!--    <td>300.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th> Фиксация культевой вкладки</th>-->
                  <!--    <td>500.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th> Индивидуальная ложка</th>-->
                  <!--    <td>1,500.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Снятие штампованной коронки</th>-->
                  <!--    <td>1,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Снятие коронки цельнолитой, металлокерамической, диоксид циркония</th>-->
                  <!--    <td>1,500.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>  Моделирование прикуса с применением лицевой дуги</th>-->
                  <!--    <td>4,000.00 руб</td>-->
                  <!--</tr>-->
                  <!--<tr>-->
                  <!--    <th>Изготовление каппы при бруксизме</th>-->
                  <!--    <td>3,000.00 руб</td>-->
                  <!--</tr>-->
              </table>
            </div>
        </div>
    </div>
    <!--<div class="accordion_item">-->
    <!--    <h2 class="accordion_titl">   Детская стоматология</h2>-->
    <!--    <div class="accordion_answer">-->
                    
            <!--<div class="work ">-->
                
            <!--    <h1>цена</h1>-->
            <!--</div>-->
    <!--        <div class="price">-->
    <!--          <table>-->
    <!--              <tr>-->
    <!--                  <th class="sec" colspan="2">Анестезиология</th>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Седация закисью азота до 30 минут</th>-->
    <!--                  <td>3,000.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Седация закисью азота до 60 минут</th>-->
    <!--                  <td>3,800.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Ингаляционный наркоз (Севоран) продолжительность от 30 до 60 минут</th>-->
    <!--                  <td>14,000.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Ингаляционный наркоз (Севоран) каждый последующий час </th>-->
    <!--                  <td>12,000.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Анестезия инфильтрационная</th>-->
    <!--                  <td>1,000.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Анестезия аппликационная</th>-->
    <!--                  <td>300.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th class="sec" colspan="2"> Общее</th>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Повторный осмотр стоматолога</th>-->
    <!--                  <td>0.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Первичный прием, осмотр и консультация детского стоматолога</th>-->
    <!--                  <td>1,500.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>  Повторный прием стоматолога</th>-->
    <!--                  <td>500.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Адаптационный прием ребенка у детского стоматолога</th>-->
    <!--                  <td>1,500.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Осмотр, оформление справки</th>-->
    <!--                  <td>500.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Прицельный снимок зуба</th>-->
    <!--                  <td>300.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Ортопантомограмма</th>-->
    <!--                  <td>1,000.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th class="sec" colspan="2">Профессиональная гигиена, профилактика</th>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Временный прикус (чистка, щетка, паста, полировка, ремотерапия)</th>-->
    <!--                  <td>4,500.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Сменный прикус (чистка, ультразвук, щетка, паста, полировка, ремотерапия)</th>-->
    <!--                  <td>5,500.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Постоянный прикус (чистка, ультразвук, щетка, паста, Air Flow, полировка, ремотерапия)</th>-->
    <!--                  <td>6,500.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Герметизация фиссур</th>-->
    <!--                  <td>1,500.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Глубокое фторирование эмали (1 зуб)</th>-->
    <!--                  <td>200.00 руб </td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th class="sec" colspan="2"> Лечение пульпита временного зуба</th>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Пульпотомия (наложение IMR)</th>-->
    <!--                  <td>2,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Пульпотомия (наложение Пульподент)</th>-->
    <!--                  <td>2,000.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Лечение 1 канала временного зуба</th>-->
    <!--                  <td>1,200.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Наложение девитализирующей пасты</th>-->
    <!--                  <td>400.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Наложение лечебной повязки на устья каналов</th>-->
    <!--                  <td>600.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>  Временная пломба</th>-->
    <!--                  <td>600.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Восстановление зуба светоотверждаемым материалом Estelite  1 класс</th>-->
    <!--                  <td>5,000.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Восстановление зуба светоотверждаемым материалом Estelite 2 класс</th>-->
    <!--                  <td>3,900.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Восстановление зуба коронкой ЗМ</th>-->
    <!--                  <td>6,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th class="sec" colspan="2">Лечение кариеса</th>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Лечение кариеса в стадии пятна ICON</th>-->
    <!--                  <td>2,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Восстановление зуба светоотверждаемым материалом Estelite 1 класс</th>-->
    <!--                  <td>5,000.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Восстановление зуба светоотверждаемым материалом Estelite 2 класс</th>-->
    <!--                  <td>8,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение кариеса центральной группы зубов с реставрацией </th>-->
    <!--                  <td>8,300.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Лечебная прокладка </th>-->
    <!--                  <td>500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Изолирующая прокладка </th>-->
    <!--                  <td>250.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th class="sec" colspan="2">Лечение пульпита постоянного зуба </th>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Лечение пульпита постоянного зуба с несформированными корнями  </th>-->
    <!--                  <td>2,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение пульпита постоянного зуба со сформированными корнями (1 канал) </th>-->
    <!--                  <td>5,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Лечение пульпита постоянного зуба со сформированными корнями (2 канала) </th>-->
    <!--                  <td>8,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Лечение пульпита постоянного зуба со сформированными корнями (3 канала) </th>-->
    <!--                  <td>11,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение пульпита постоянного зуба со сформированными корнями (4 канала)</th>-->
    <!--                  <td>12,900.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Временное пломбирование 1 канала пастой CALASEPT/METAPEX</th>-->
    <!--                  <td>800.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th class="sec" colspan="2"> Лечение переодонтита постоянного зуба</th>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение переодонтита постоянного зуба с несформированными корнями (1 канал)</th>-->
    <!--                  <td>4,250.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>  Лечение переодонтита постоянного зуба с несформированными корнями (2 канала)</th>-->
    <!--                  <td>5,100.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение переодонтита постоянного зуба с несформированными корнями (3 канала)</th>-->
    <!--                  <td>7,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение переодонтита постоянного зуба с несформированными корнями (4 канала)</th>-->
    <!--                  <td>9,100.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение переодонтита постоянного зуба со сформированными корнями (1 канал)</th>-->
    <!--                  <td>7,300.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение переодонтита постоянного зуба со сформированными корнями (2 канала)</th>-->
    <!--                  <td>10,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение переодонтита постоянного зуба со сформированными корнями (3 канала)</th>-->
    <!--                  <td>12,000.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Лечение переодонтита постоянного зуба со сформированными корнями (4 канала)</th>-->
    <!--                  <td>16,600.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th class="sec" colspan="2">Лечение стоматита</th>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Первое посещение</th>-->
    <!--                  <td>1,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Повторное посещение</th>-->
    <!--                  <td>500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th class="sec" colspan="2"> Хирургия</th>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Удаление временного зуба с физиологической резорбцией корня</th>-->
    <!--                  <td>2,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th> Удаление временного  зуба простое</th>-->
    <!--                  <td>3,000.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Удаление временного зуба сложное</th>-->
    <!--                  <td>4,500.00 руб</td>-->
    <!--              </tr>-->
    <!--              <tr>-->
    <!--                  <th>Подсечение уздечки языка у ребенка до 3-х месяцев</th>-->
    <!--                  <td>9,000.00 руб</td>-->
    <!--              </tr>-->
    <!--          </table>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</div>

<div class="text_accord">
    <p>
        Цены на дайнной странице не являются публичной офертой.
    </p>
    <p>
        Полный план лечения с её стоимостью вы сможете получить только после осмотра, диагностики и
        консультации в нашей клинике.
    </p>

   
</div>
</div>

@endsection
@section('js')
<script src="{{ asset('js/accordion.js') }}"></script>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('style/accordion.css') }}" />
@endsection
