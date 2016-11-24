@extends ('layouts.base')
@section('title')
	{{$title}}
@endsection
@section('content')
<div class='scroll'>
	@foreach($rooms->reverse() as $one)
		
			<a href="{{asset('room/'.$one->id)}}">{{$one->name}}</a>
		
	@endforeach
</div>
@endsection