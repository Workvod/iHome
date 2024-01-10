<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструктор</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/admin.css">
	<link href="https://fonts.cdnfonts.com/css/capture-it" rel="stylesheet">
</head>
<body>
<style>
	button{
		background-color:lightgray;
		color:black;
		border-radius: 12px;
		font-family: 'Capture it', sans-serif;
		text-decoration:none;
	}
	a{
		text-decoration: none;
		color:black;
		font-family: 'Capture it', sans-serif;
	}
	a:hover{
		background-color: orange;
		color:black;
	}
	.panel{
		height: 25px;
		word-spacing: 10px;
		background-color:lightgray;
		text-align:center;
		width: content;
	}
</style>
<div class="panel">
	<a href="/admin/panel">Главная</a>
	<a href="/admin/panel/slider">Слайдер</a>
	<a href="/admin/panel/tovar">Ред-е товаров</a>
	<a href="/admin/panel/kateg">Тип товара</a>
	<a href="/admin/panel/color">Цвета</a>
	<a href="/admin/panel/obem">Объем</a>
	<a href="/admin/panel/podborki">Подборки</a>
</div>
	@section('form')
	<div style="margin-left: 10px; text-align:center;vertical-align: middle;
	color:black;">
		<h1>Добро пожаловать в панель администрирования!</h1>
		<h4>Нажмите на пункт меню и выберите раздел для редактирвоания:)</h4>
		<h4>Контакты для связи: Zefirka_community</h4>
	<div>
	@show
</body>
</html>