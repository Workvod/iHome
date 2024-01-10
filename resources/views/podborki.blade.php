@extends('panel')
@section('form')

<form method="post" enctype="multipart/form-data">
	@csrf
	@method('put')
	<h4>Выберите категорию подборки</h4>
	<select name="kat">
		@foreach($type as $el)
		<option>{{ $el->typ }}</option>
		@endforeach
	</select>
	<h4>Введите название подборки</h4>
	<p></p>
	<input type="text" placeholder="Подборка" name="podborka">
	<p></p>
	<h4>Загрузите фото подборки</h4>
	<p></p>
	<input type="file" name="fotopod">
	<p></p>
	<button type="submit" name="action" value="podb">Добавить</button>
	<button type="submit" name="action" value="podel">Удалить</button>
</form>
@endsection