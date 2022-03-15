@extends('home')

@section('content_header')
    <h1>New category</h1>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        {{ Form::model($category, ['route' => ['categories.update', $category], 'method' => 'PUT']) }}
        <div class="card-body">
            @include('admin.category.form')
        </div>

        <div class="card-footer">
            {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
        </div>
        {{ Form::close() }}
    </div>
@endsection
