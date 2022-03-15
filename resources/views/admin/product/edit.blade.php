@extends('home')

@section('content_header')
    <h1>Edit product</h1>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        {{ Form::model($product, ['route' => ['products.update', $product], 'method' => 'PUT']) }}
        <div class="card-body">
            @include('admin.product.form')
        </div>

        <div class="card-footer">
            {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
        </div>
        {{ Form::close() }}
    </div>
@endsection
