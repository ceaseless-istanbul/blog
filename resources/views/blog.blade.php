@extends('main-layout')

@section('main-content')
<h2>{{$data->title}}</h2>
{{$data->body}}
@endsection

@section('right-sidebar')
  @include('partials.right-sidebar')
@endsection
