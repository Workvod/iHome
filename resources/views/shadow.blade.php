@include('header')
  <section class="shop_section layout_padding">
    <div class="container">


      <div class="heading_container heading_center" style="font-size: 20pt; font-family:'Capture it',sans-serif; letter-spacing:2px; font-size:25pt;">
        <div style="margin-top:20px; font-size: 20pt; font-family:'Capture it',sans-serif; letter-spacing:2px; font-size:20pt;">Все {{$data}}</div>
      </div>
      <div class="row">
        @foreach($param as $el)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="/{{$data}}/{{$el->nazv}}">
              <div class="img-box">
                <img src="{{asset('/storage/' . $el->photo)}}" alt="">
              </div>
              <div class="detail-box" style="justify-content: center;">
                <h6 style="font-family: 'Montserrat', sans-serif;font-weight: 600; letter-spacing:2px; font-size: xx-large;">
                  {{ $el->nazv }}
                </h6>
              </div>
            </a>
          </div>
        </div>
        @endforeach
    </div>
  </section>

 @include('footer')
</body>
</html>