@extends('todo.create')

@section('editId',$todoItem->id)
@section('editTitle',$todoItem->title)
@section('editBody',$todoItem->body) 

@section('editMethod')
	{{method_field('PUT')}}
@endsection