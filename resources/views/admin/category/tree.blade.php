@extends('home')

@section('content_header')
    <h1>Categories tree</h1>
@endsection

@section('content')
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->title }}</li>
            <ul>
                @foreach ($category->childrenCategories as $childCategory)
                    @include('admin.category.child_category', ['child_category' => $childCategory])
                @endforeach
            </ul>
        @endforeach
    </ul>
@endsection
