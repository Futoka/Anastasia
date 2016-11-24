@extends ('layouts.base')
@section('title')
	{{$title}}
@endsection
@section('room')
	{{$room}}
@endsection
@section('content')
@include ('templates.rooms')

	<div class="work-window" id="work-window">
		<div class="window" id="chat">
		
			@foreach($messages->reverse() as $one)
				<p><a>User: </a>{{$one->body}}</p>
			@endforeach
		</div>
		<div class="list" "id="list-chat">
			<p>Пользователи:</p> 
		</div>
	</div>
	<form method='POST' action='message/1'>  <!-- 1 - изменить на номер комнаты -->
	{{csrf_field()}}
	<div class="enter" "id="enter-chat">
		<input autofocus type="text" class="enter-text" name='body' id="area" onkeypress="Press(this.value, event)"></textarea>	
		<input class="enter-button" type="submit" value="Ввод" id="enter">
	</div>
	</form> 
@endsection