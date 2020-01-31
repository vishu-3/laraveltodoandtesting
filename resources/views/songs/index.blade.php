{{-- @extends('layout.app1') --}}
@extends('layout.app')

@section('title','Songs')

@section('body')
{{'songs r everythig' }}
<br>
@foreach($songs as $song)
	{{$song->title}}
@endforeach
@endsection 