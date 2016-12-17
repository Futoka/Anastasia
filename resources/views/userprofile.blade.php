@extends ('layouts.base')
@section('title')
	{{$title}}
@endsection
@section('content')
<div id="userprofile">
		<div id="user-avatar">
			<p>Аватар</p>
		</div>
		<div id="user-name">
			<p>Имя</p>
		</div>
		<div id="user-surname">
			<p>Фамилия</p>
		</div>
		<div id="user-contacts">
			<p>Контакты для связи</p>
		</div>
		<div id="user-info">
			<p >О себе</p>
		</div>
</div>

@endsection