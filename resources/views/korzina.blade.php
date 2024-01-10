@include('header')
    <section class="section-cart">
        <header class="section-cart__header">
            <div class="container">
                <h1 class="title-1">КОРЗИНА</h1>
            </div>
        </header>

        <div class="section-cart__body">
            <div class="container">

                <section class="cart">
                    <header class="cart-header">
                        <div class="cart-header__title">наименование</div>
                        <div class="cart-header__count">количество</div>
                        <div class="cart-header__cost">стоимость</div>
                    </header>
                    @foreach($tovar as $el)
                    <section class="product">
                        <div class="product__img"><img src="{{asset('/storage/' . $el->photo)}}" alt="Apple MacBook Air 13"></div>
                        <div class="product__title">{{ $el->obchs }}</div>
                        <div class="product__count">
                            <div class="count">
                                <div class="count__box">
                                    <input type="number" id="chis" name="chis" disabled="disabled" class="count__input" min="1" max="10" value="{{ $el->kolich }}">
                                </div>
                                <form method="post">
                                  @csrf
                                  @method('put')
                                <div class="count__controls">


                                    <button type="submit" id="upc" name="action" value="ac{{$el->id}}" class="count__up" onclick="max()">
                                        <img src="/images/icons/icon-up.svg" alt="Increase">
                                    </button>
                                    <button type="submit" name="action" value="dc{{$el->id}}" class="count__down">
                                        <img src="/images/icons/icon-down.svg" alt="Decrease">
                                    </button>

                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="product__price">{{ ($el->price)*($el->kolich) }}₽</div>
                        <div class="product__controls">
                          <form method="post">
                            @csrf
                            @method('put')
                            <button type="submit" name="action" value="uw{{$el->id}}">
                                <img src="/images/icons/cross.svg" alt="Delete">
                            </button>
                          </form>
                        </div>
                    </section>
                    @endforeach
                    <footer class="cart-footer">
                        <div class="cart-footer__count">Итого:</div>
                        <div class="cart-footer__price" id="cena">{{ $price }} ₽</div>
                    </footer>
                </section>
                <form method="post">
                                    <div class="product-button">

                  @csrf
                  @method('put')
                <button type="submit" onclick="func()" name="action" id="epta" value="oform" class="add-bag-btn">Оформить заказ</button>
                <button type="submit" name="action" value="ster" class="add-wishlist-btn">Очистить все</button>
            </div>
          </form>
            </div>
        </div>
    </section>
    <script>
    function max(){
        var chis = document.getElementById("chis").value;
        if(chis>9){
            document.getElementById("upc").disabled = true;
        }
    }
    function func(){
        var a=document.querySelector('.cart-footer__price').lastElementChild.classList[0];
        alert(a);
    }
  </script>
@include('footer')

</body>
</html>