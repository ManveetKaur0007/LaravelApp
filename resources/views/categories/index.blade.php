@extends('master')
@section('content')
    <h1>All Categories</h1>
    @foreach($categories as $category)
        id: {{ $category->id }}<br>
        name: {{$category->name}}<br>
        description: {{$category->description}}<br>
        <a href="{{ action('CategoryController@edit', $category->id) }}">[edit]</a><br>
        <form method="post" action="{{action ('CategoryController@destroy', $category->id) }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input type="submit" value="Delete">
        </form>
        <br>
    @endforeach

    {{ $categories->links() }}
@endsection
