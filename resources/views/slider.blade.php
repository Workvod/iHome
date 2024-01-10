@extends('panel')
@section('form')
	<form method="post" enctype="multipart/form-data" style="margin-left: 10px; color:black; font-size: 10pt;">
	@csrf
	@method('put')
	<h3>Создание слайдов</h3>
	<p></p>
	<h4>Введите основной текст для слайда</h4>
	<input type="text" placeholder="текст слайда" name="tslide">
	<p></p>
	<h4>Введите побочный текст</h4>
	<input type="text" placeholder="побочный текст" name="pslide">
	<p></p>
	<h4>Введит текст для кнопки</h4>
	<input type="text" name="tknop" placeholder="текст для кнопки">
	<p></p>
	<h4>Добавьте фото для слайда</h4>
	<p></p>
	<input type="file" name="photo">
	<p></p>
	<h4>Выберите товар для отображения или ссылку на ресурс</h4>
	<p></p>
	<h5>Ссылка на ресурс</h5>
	<input type="text" placeholder="ссылка на ресурс" name="res">
	<p></p>
	<h5>Ссылка на товар</h5>
	<select name="tovar">
	@isset($data)
		@foreach($data as $el)
		<option>
			{{$el->obchs}}
		</option>
		@endforeach
	@endisset
	</select>
	<p></p>
	<button type="submit" name="action" value="slide">Добавить</button>
	<p></p>
	Примечание: если ссылка на ресурс пустая, то добавляется ссылка на товар
	<p></p>
	<h4>Выберите слайд для удаления</h4>
	<select name="slide">
	@isset($slide)
		@foreach($slide as $sl)
		<option>
			{{$sl->tovar}}
		</option>
		@endforeach
	@endisset
	</select>
	<p></p>
	<button type="submit" name="action" value="sl">Удалить</button>
	</form>
@endsection