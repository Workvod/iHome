@extends('panel')
@section('form')

<form method="post" action="/admin/panel/tovar" enctype="multipart/form-data" style="margin-left: 10px; color:black; font-size: 10pt;">
	@csrf
	@method('put')
	<h4>Тип товара</h4>
	<select name="type">
	@isset($type)
		@foreach($type as $el)
		<option>{{ $el->typ }} </option>
		@endforeach
	@endisset
	</select>
	<p></p>
	<h4>Подборка товара</h4>
	<select name="podb" >
	@isset($podb)
		@foreach($podb as $pod)
		<option>{{ $pod->nazv }}</option>
		@endforeach
	@endisset
	</select>
	<p></p>
	<h4>Название товара</h4>
	<input type="text" placeholder="Название" name="nazv">
	<p></p>
	<h4>Объем товара</h4>
	<select name="obtov">
	@isset($obem)
		@foreach($obem as $ob)
		<option>{{ $ob->obem }}</option>
		@endforeach
	@endisset
	</select>
	<p></p>
	<h4>Цвет товара</h4>
	<select name="obcol">
	@isset($color)
		@foreach($color as $col)
		<option>{{ $col->col }}</option>
		@endforeach
	@endisset
	</select>
	<p></p>
	<h4>Описание товара</h4>
	<textarea placeholder="Описание через -" name="opis"></textarea>
	<p></p>
	<h4>Цена</h4>
	<input type="number" name="price">
	<p></p>
	<h4>Основное фото товара</h4>
	<input type="file" name="image">
	<p></p>
	<h4>Дополнительное фото товара</h4>
	<input type="file" name="poboch">
	<p></p>
	<button name="action" type="submit" value="dob">Добавить</button>
	<p></p>
	@isset($obchs)
	<select name ="obchs">
		@foreach($obchs as $el)
		<option>{{ $el->obchs }}</option>
		@endforeach
	</select>
	@endisset
	<p></p>
	<button name="action" type="submit" value="deltov">Удалить</button>
	<button name="action" onclick="getMessage()" value="edtov">Изменить</button>
</form>

@endsection