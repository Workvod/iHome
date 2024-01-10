@include('header')
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center" style="font-size: 20pt; font-family:'Capture it',sans-serif; letter-spacing:2px; font-size:25pt;">
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
    </div>
  </section>
 @include('footer')
</body>
</html>