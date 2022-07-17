@extends('master')

@section('content')
    <h1>Deleted Categories</h1>

    @foreach ($categories as $category)
        Category ID: {{ $category->id }}<br>
        Name: {{ $category->name }}<br>
        Description: {{ $category->description }}<br>
        <a href="{{ action('CategoryController@restore',
                        $category->id) }}">
            [restore]</a><br>
        <a href="{{ action('CategoryController@forceDelete',
                        $category->id) }}">
            [Force Delete]</a><br>
        <br>
    @endforeach
@endsection
