@extends('panel')
@section('form')
<div class="color">
	<form method="post" >
		@csrf
        @method('put')
		<input type="text" placeholder="Цвет"name="colt">
		<p></p>
		<p><select name="colx">
		@foreach($data as $el)
		<option>{{ $el -> col }}</option>
		@endforeach
		</select>
		</p>
		<button type="submit" name="action" value="dobc">Добавить</button>
		<button type="submit" name="action" value="delc">Удалить</button>
	</form>
</div>
@endsection