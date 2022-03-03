@extends('home')

@section('content')
    @foreach($categories as $category)
        <p>{{$category->title}}</p>
    @endforeach
@endsection
