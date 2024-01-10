@include('header')
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @isset($nachsl)
            @foreach($nachsl as $nach)
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        {{$nach->text}} <br>
                        <h2>{{$nach->poboch}}</h2>
                      </h1>
                      <a href="{{$nach->tovar}}">
                        {{$nach->knopka}}
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="{{asset('/storage/' . $nach->photo)}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          @endisset
          @isset($slider)
          @foreach($slider as $sl)
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        {{$sl->text}}<br>
                        <h2>{{$sl->poboch}}</h2>
                      </h1>
                      <a href="{{$sl->tovar}}">
                        Купить
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="{{asset('/storage/' . $sl->photo)}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endisset
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
<br>
 <section id="project" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="/dev" class="image-popup">
                              <img src="images/rass.jpg" class="img-responsive" alt="">

                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>РАССРОЧКА</h1>
                                        <h3>ПОДРОБНЕЕ</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="/tradein" class="image-popup">
                              <img src="images/trade.jpg" class="img-responsive" alt="">

                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>ТРЕЙД-ИН</h1>
                                        <h3>ПОДРОБНЕЕ</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="/garantia" class="image-popup">
                              <img src="images/garant.png" class="img-responsive" alt="">

                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>ГАРАНТИЯ</h1>
                                        <h3>ПОДРОБНЕЕ</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="/dostavka" class="image-popup">
                              <img src="images/dost.jpg" class="img-responsive" alt="">

                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>КАК МЫ РАБОТАЕМ</h1>
                                        <h3>ПОДРОБНЕЕ</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

          </div>
     </div>
</section>

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          ПОПУЛЯРНЫЕ ТОВАРЫ
        </h2>
      </div>

      <div class="row">
        @foreach($param as $el)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="/{{$el->type}}/{{$el->podborka}}/{{$el->id}}">
              <div class="img-box">
                <img src="{{asset('/storage/' . $el->photo)}}" alt="">
              </div>
              <div class="detail-box">
                <h6 style="font-family: 'Montserrat', sans-serif; font-weight:600;">
                  {{ mb_strimwidth($el->obchs, 0, 25, "...") }}
                </h6>
              </div>
                <h6 style="font-family: 'Montserrat', sans-serif; font-weight:600;">{{$el->price}} ₽</h6>
            </a>
          </div>
        </div>
        @endforeach
  </section>

  <!-- end shop section -->
  <!-- info section -->
 @include('footer')
</body>

</html>