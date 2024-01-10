@extends('panel')
@section('form')
<div class="kateg">
	<form enctype="multipart/form-data" method="post" >
		@csrf
        @method('put')
        <p></p>
		<input type="text" placeholder="Название категории"name="kateg">
		<p></p>
		<p><select name="catx">
		@foreach($data as $el)
		<option>{{ $el -> typ }}</option>
		@endforeach
		</select>
		</p>
		<button type="submit" name="action" value="dob">Создать</button>
		<button type="submit" name="action" value="del">Удалить</button>
	</form>
</div>
@endsection