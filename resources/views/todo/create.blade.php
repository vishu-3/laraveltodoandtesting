{{-- @extends('layout.app1') --}}
@extends('layout.app')
<br>
@section('body')
	<br>
	<a href="/todo" class="btn btn-info btn-sm form-control col-lg-1">Back</a>
	<div class="col-lg-4 col-lg-4 offset-2">
		<h1>{{ucfirst(substr(Route::currentRouteName(),5))}} Item</h1>
		<form action="/todo/@yield('editId')" method="post"> 
			{{csrf_field()}}
			@section('editMethod')
				@show
		  {{-- <fieldset> --}}
		    <div class="form-group">
		      <input class="form-control" id="title" name="title" value="@yield('editTitle')" placeholder="Title"></input>
		      <br>
		      <textarea class="form-control" id="body" name="body" rows="4" placeholder="body">@yield('editBody')</textarea>
		      <br>
		    <button type="submit" class="btn btn-success">Submit</button>
		    </div>
		  {{-- </fieldset> --}}
		</form>
		@include('todo.partials.errors')
	</div>
@endsection