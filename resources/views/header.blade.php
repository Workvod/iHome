<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    iHome - Интернет-магазин
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="/css/main.css" rel="stylesheet" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/css/responsive.css" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/capture-it" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link href="https://fonts.cdnfonts.com/css/capture-it" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/mode-g" rel="stylesheet">
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <form method="post">
             @csrf
            @method('put')
        <div class="navbar-brand-city">
        <a class="navbar-brand" href="/">
          <span style="font-family: 'Capture it', sans-serif; letter-spacing: 4px;">
            <img src="/images/lihome.jpg" style="width:120px;">
          </span>
        </a>
                              <p style="font-family: 'Capture it', sans-serif;">
            г. Обнинск
          </p>

          <div class="user_option">

         <div class="searchBar2">

    <input id="searchQueryInput2" type="text" name="searchQueryInput" placeholder="ПОИСК" value="" />

</div>
<a href="/search">
        <button  name="action" name="searchQuerySubmit" value="searchQuerySubmit" style="background-color:  transparent; border-style: none;"><i class="fa fa-search" aria-hidden="true"></i></button>
    </a>
        <a href="/wish">
        <i class="fa fa-heart" aria-hidden="true"></i>
    </a>
    <a href="/cart">
        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
    </a>
    <a href="tel:89123253074">
        <i class="fa fa-phone" aria-hidden="true"></i>
    </a>
  </div>
        </div>
        </form>
  <div data-toggle="collapse" class="hidden-element">
    <span>
        <a href="/wish"><button style="border: none; background-color: transparent;"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></button></a>
        <a href="/cart"><button style="border: none; background-color: transparent;"><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i></button></a>
        <a href="tel:89123253074"><button style="border: none; background-color: transparent;"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></button></a>
    </span>
  </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <div class="searchBar">
              <form method="post">
                @csrf
                @method('put')
    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="ПОИСК" value="" />
    <button id="searchQuerySubmit" action="action" type="submit" name="searchQuerySubmit" value="searchQuerySubmit">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#000" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
  </form>
  </div >

<div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav">
      <li class="nav-item"><a href="/" class="nav-link">ГЛАВНАЯ</a></li>
      @foreach($type as $ty)
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="/{{ $ty->typ }}" id="navbarDropdown{{ $ty->typ }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $ty->typ }}
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown{{ $ty->typ }}">
            <a class="dropdown-item" href="/{{$ty->typ}}">Все {{$ty->typ}}</a>
            @foreach($podb as $pod)
               @if($pod->type == $ty->typ)
                  <a class="dropdown-item" href="/{{ $ty->typ }}/{{ $pod->nazv }}">{{ $pod->nazv }}</a>
               @endif
            @endforeach
         </div>
      </li>
      @endforeach
   </ul>
</div>
</nav>
<script>
// Получаем все элементы с классом .dropdown-toggle
const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

// Добавляем обработчик события на каждый элемент
dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', (event) => {
        event.preventDefault();
        // Переключаем класс для применения/удаления стилей при клике
        toggle.classList.toggle('clicked');

        // Закрываем другие открытые меню, если они есть
        closeOtherMenus(toggle);
    });
});

// Функция для закрытия других открытых меню
function closeOtherMenus(clickedToggle) {
    dropdownToggles.forEach(toggle => {
        if (toggle !== clickedToggle && toggle.classList.contains('clicked')) {
            toggle.classList.remove('clicked');
        }
    });
}
</script>
    </header>