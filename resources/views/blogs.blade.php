@extends('main-layout')

@section('main-content')
<ul>
  @foreach ($data as $value)
    <li><a href="{{route('view_blog', $value->id)}}">{{$value->title}}</a></li>
  @endforeach
</ul>
@endsection

@section('right-sidebar')
  @include('partials.right-sidebar')
@endsection
