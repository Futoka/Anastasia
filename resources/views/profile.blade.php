@extends ('layouts.base')
@section('title')
	{{$title}}
@endsection
@section('content')
<div id="profileform">
	<form method='POST' action="{{asset('profile')}}" enctype="multipart/form-data">
	{{csrf_field()}}
		<div class="form-group">
			<label for="exampleInputFile">Аватар</label>
			<input type="file" id="exampleInputFile" name="useravatar">
			<p class="help-block">Выберете файл JPEG или PNG.</p>
		</div>
		<div class="form-group">
			<label>Имя</label>
			<input type="text" class="form-control" name="username" value="{{$user->username}}">
		</div>
		<div class="form-group">
			<label>Фамилия</label>
			<input type="text" class="form-control" name="usersurname" value="{{$user->usersurname}}">
		</div>
		<div class="form-group">
			<select class="form-control" name="usersex" value="{{$user->usersex}}"><option>скрыть</option><option>мужской</option><option>женский</option></select>
		</div>
		<div class="form-group">
			<label>Контакт для связи</label>
			<input type="text" class="form-control" name="usercontact" value="{{$user->usercontact}}">
		</div>
		<div class="form-group">
			<label >О себе</label>
			<textarea type="text" class="form-control" name="userabout" value="{{$user->userabout}}"></textarea>
		</div>
		
		<button type="submit" class="btn btn-primary" name="profilebutton">Сохранить изменения</button>
	</form> 
</div>

@endsection