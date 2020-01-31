{{-- @extends('layout.app1') --}}
@extends('layout.app')
<br>
@include('todo.partials.message')
@section('body')
	<br>
	<div class="col-lg-6 m-5">
	
		<div class="col-lg-3 float-right">
			<a href="todo/create" class="btn btn-info btn-sm form-control">Add New</a>
			{{-- <a href="create" class="btn btn-info btn-sm form-control">Add New</a> --}}
		</div>
		
		<div class="col-lg-9 ">
			<center><h1>Todo Lists</h1></center>
			<div class="row">
				<div class="col-lg-8 mr-0">
					<ul class="list-group">
				    @foreach($todos as $todo)
					  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="{{'/todo/'.$todo->id}}">{{$todo->title}}</a>
					    <span class="badge badge-secondary badge-pill">{{$todo->created_at->diffForHumans()}}</span>
					  </li>
				    @endforeach
					</ul>
				</div>
				<div class="col-lg-4 ml-0">
					<ul class="list-group">
				    @foreach($todos as $todo)
					  <li class="list-group-item   align-items-center">
					  	<a href="{{'/todo/'.$todo->id.'/edit'}}"> <i class="fas fa-edit text-success"></i> </a>

					  	<form class="form-group float-right mb-1" action="{{'/todo/'.$todo->id}}"  method="post">
					  		{{csrf_field()}}
					  		{{ method_field('DELETE') }}
					  		<button type="submit" style="border:none;"><i class="fas fa-trash text-danger"></i></button>
					  	</form>
					  </li>
				    @endforeach
					</ul>
				</div>
					{{-- </div>	 --}}
			</div>
		</div>
		
	</div>
@endsection