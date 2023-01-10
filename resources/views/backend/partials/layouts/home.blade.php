@extends('backend.master')

@section('content')
<h1>{{$title}}</h1>
<h4>{{$house}}</h4>

@for($i = 1; $i <=10; $i++)
<p>{{$i}}</p>
@endfor

@endsection

