@extends('panel')
@section('form')
<div class="obem" style="margin-left:10px">
	<form method="post" >
		@csrf
		@method('put')
		<p></p>
		<input  type="text" placeholder="Объем"name="ob">
		<p></p>
		<p><select name="nx">
		@foreach($data as $el)
		<option>{{ $el -> obem }}</option>
		@endforeach
		</select>
		</p>
		<p></p>
		<button type="submit" name="action" value="obdob">Создать</button>
		<p></p>
		<button type="submit" name="action" name="action" value="obdel">Удалить</button>
	</form>
</div>
@endsection