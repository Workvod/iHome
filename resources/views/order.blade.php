@include(@header)    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="" style="margin-top:15px;">
          Заказ
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9130.34631334613!2d36.6178521!3d55.103003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46cad33ed5499e6d%3A0xfe54008f92f850bb!2siHome!5e0!3m2!1sru!2sru!4v1699923959381!5m2!1sru!2sru
                key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=пр. Ленина, Обнинск, Калужская обл." width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
              </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form method="post" action="/order">
            @csrf
            @method('put')
            <h4 style="font-weight: 600;">Товары</h4>
            <div>
              <input readonly type="text" name="tov" id="tov" placeholder="Товар" value="@foreach($tovars as $el) {{ $el->nazv }} кол-во: {{$el->kolich}}; @endforeach"/>
            </div>
            <h4 style="font-weight: 600;">Адрес доставки</h4>
              <div>
              <input maxlength="30" required name="cit" id="cit" placeholder="Город">
            </div>
            <div>
              <input maxlength="40" required type="text" name="uliza" placeholder="Улица"/>
            </div>
            <div>
              <input maxlength="20" required type="text" name="xata" placeholder="Дом/Кв" />
            </div>
            <h4 style="font-weight: 600;">Личные данные</h4>
            <div>
              <input maxlength="40" required type="text" name="nam" placeholder="ФИО" />
            </div>
             <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text">+7</span>
            </div>
            <input type="text" required class="form-control" placeholder="Телефон" name="tel" id="phoneInput" />
            </div>
            <script>
            const phoneInput = document.getElementById("phoneInput");

            phoneInput.addEventListener("input", function () {
            // Удаляем все символы, кроме цифр
            let phoneNumber = this.value.replace(/\D/g, "");

            // Ограничение ввода до 10 символов
            if (phoneNumber.length > 10) {
            phoneNumber = phoneNumber.slice(0, 10);
            }

            // Форматируем номер телефона с вставкой тире
            let formattedPhoneNumber = phoneNumber.replace(/(\d{3})(\d{0,3})(\d{0,2})(\d{0,2})/, "$1-$2-$3-$4");

            // Убираем лишние тире в конце
            formattedPhoneNumber = formattedPhoneNumber.replace(/-+$/, "");

            this.value = formattedPhoneNumber;
            });
            </script>
            <h4 style="font-weight: 600; margin-top: 10px;">Итого: {{ $price }}  ₽</h4>
            <label class="dannie">Даю согласие на <a href="/agreement" style="text-decoration: underline;">обработку данных</a>
              <input required type="checkbox">
              <span class="checkmark"></span>
            </label>
            <div class="d-flex ">
              <button style="border-radius: 8px;" type="submit" name="action" value="otpr">
                ЗАКАЗАТЬ
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
    var prov = document.getElementById("tov");
    var value = prov.value;
    console.log(value);
      if (value.trim() === "") {
      alert("Корзина пуста, выберите товары");
      document.location.href = '/';
      }
    });

  </script>
  <!-- end contact section -->
    <!-- info section -->
    @include('footer')
</body>

</html>