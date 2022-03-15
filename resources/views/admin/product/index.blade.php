@extends('home')

@section('content_header')
    <h1>All products</h1>
@endsection

@section('content')
    <table class="table">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>
                    {{$product->id}}
                </td>
                <td>
                    <a href = {{route('products.show', $product->id)}}>
                        {{$product->title}}
                    </a>
                </td>
                <td>
                    {{$product->price}} $
                </td>
                <td>
                    {{$product->description}}
                </td>
                <td>
                    {{$product->category_id}}
                </td>
                <td>
                    <form method="post" action="{{ route('products.destroy', $product->id) }}">

                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                    <form method="patch" action="{{ route('products.edit', $product->id) }}">

                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-block btn-secondary">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
