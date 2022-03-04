@extends('home')

@section('content_header')
    <h1>New category</h1>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        {{ Form::model($category, ['route' => 'categories.store']) }}
            <div class="card-body">
                @include('category.form')
            </div>

            <div class="card-footer">
                {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
            </div>
        {{ Form::close() }}
    </div>
@endsection
