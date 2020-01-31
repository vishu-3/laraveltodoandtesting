{{--  @extends('layout.app1')  --}}

{{--  @section('content')  --}}
@foreach ($beverages as $beverage)
<h1>{{$beverage->name}}</h1>
@endforeach

{{--  @endsection  --}}