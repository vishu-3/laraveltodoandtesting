{{-- @extends('layout.app1') --}}
@extends('layout.app')
<br>
@section('body')
<br>
<div class="col-lg-4 col-lg-4"><h3>{{$todoItem->title}}</h3>
<h5>{{$todoItem->body}}</h5>
</div>
@endsection