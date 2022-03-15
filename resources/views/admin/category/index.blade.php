@extends('home')

@section('content_header')
    <h1>All categories</h1>
@endsection

@section('content')
    <table class="table">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>In main page</th>
            <th>Parent</th>
            <th>Slug</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>
                    {{$category->id}}
                </td>
                <td>
                    <a href = {{route('categories.show', $category->id)}}>
                        {{$category->title}}
                    </a>
                </td>
                <td>
                    {{$category->in_main_page}}
                </td>
                <td>
                    {{$category->category_id}}
                    @empty($category->category_id)
                        Null
                    @endempty
                </td>
                <td>
                    {{$category->slug}}
                </td>
                <td>
                    <form method="post" action="{{ route('categories.destroy', $category->id) }}">

                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <form method="patch" action="{{ route('categories.edit', $category->id) }}">

                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-block btn-secondary">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <form method="get" action="{{ route('categories.tree') }}">

        <button type="submit" class="btn btn-outline-danger">Show categories tree</button>
    </form>
@endsection
