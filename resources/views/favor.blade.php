@include('header')
    <section class="section-cart">
        <header class="section-cart__header">
            <div class="container">
                <h1 class="title-1">ИЗБРАННОЕ</h1>
            </div>
        </header>
        <div class="section-cart__body">
            <div class="container">

                <section class="cart">
                    <header class="cart-header">
                        <div class="cart-header__title">наименование</div>
                        <div class="cart-header__count"></div>
                        <div class="cart-header__cost">Цена</div>
                    </header>
                    @foreach($tovar as $el)
                    <section class="product">
                        <div class="product__img"><img src="{{asset('/storage/' . $el->photo)}}" alt="Apple MacBook Air 13"></div>
                        <div class="product__title">{{ $el->obchs }}</div>
                        <div class="product__count">
                        </div>
                        <div class="product__price">{{ $el->price }} руб.</div>
                        <div class="product__controls">
                          <form method="post">
                            @csrf
                            @method('put')
                            <button type="submit" name="action" value="uw{{$el->id}}" >
                                <img src="/images/icons/cross.svg" alt="Delete">
                            </button>
                          </form>
                        </div>
                    </section>
                    @endforeach
                </section>
                <form method="post" >
                @csrf
                @method('put')
                                    <div class="product-button">
                <button type="submit" name="action" value="zloi" class="add-bag-btn">Добавить в корзину</button>
                <button type="submit" name="action" value="yp" class="add-wishlist-btn">Очистить все</button>
            </div>
              </form>
            </div>
        </div>
    </section>
@include('footer')
</body>
</html>