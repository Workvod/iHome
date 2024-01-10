@include('header')
    <!-- end header section -->
@foreach($param as $el)
  </div>
    <section id="product-page">
    <div class="product-details">
        <!--**Img*************************-->
        <div class="product-img">

        <!-- Swiper Slider -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            
            <!--**1******-->
            <div class="swiper-slide">
                <img src="{{asset('/storage/' . $el->photo)}}" />
            </div>
            <!--**2******-->
            @if(($el->poboch) !=null)
            <div class="swiper-slide">
                <img src="{{asset('/storage/' . $el->poboch)}}" />
            </div>
            @endif
            </div>

            <!--btns-->
            <div class="slider-btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        </div>
        <!--**Text************************-->
        <div class="product-text">

            <!--category-->
            <span class="product-category">Техника Apple / {{ $el->podborka }}</span>
            <h3>{{ $el->obchs }}</h3>
            <span class="product-price" style="font-weight:600;">{{ $el->price }} ₽</span>

            <span style="color:gray;font-size:12px;font-family: 'Montserrat';font-weight:500;">Цена при оплате наличными</span>
            <br>
            <span>{{round(($el->price)+($el->price)*0.14)}} ₽</span>

            <span style="color:gray;font-size:12px;font-family: 'Montserrat';font-weight:500;">Цена при оплате картой или в рассрочку</span>
            <div style="overflow-wrap: break-word;">
              <h4 style=" font-weight: 600; font-size: 17.5pt;">Описание:</h4>
              {{ $el->opis = str_replace('\n', '<br />', $el->opis)}}
            </div>

            <form method="post" action="/{{ $el->type }}/{{ $el->podborka }}/{{$el->id}}">
            @csrf
            @method('put')
            <div class="product-button">
                <button name="action" type="submit" value="tocart" class="add-bag-btn">В корзину</button>
                <button name="action" type="submit" value="towish" class="add-wishlist-btn">В избранное</button>
            </div>
            </form>
            <!--help-btn
            <a href="#" class="help-btn">Need Any Help?</a>-->
        </div>

    </div>
    </section>
@endforeach
    <!--==Jquery===========================-->
    <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          450: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          820: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 1,
            spaceBetween:0,
          },
        },
      });
      
  // Событие slideChange срабатывает при изменении активного слайда
  swiper.on('slideChange', function () {
    // Убираем прозрачность у кнопок навигации
    $(".swiper-button-prev, .swiper-button-next").css("opacity", "1");
  });

      $('.s-checkbox').on('change', function() {
		    $('.s-checkbox').not(this).prop('checked', false);  
		});
    </script>

   <!-- info section -->

@include('footer')
</body>

</html>