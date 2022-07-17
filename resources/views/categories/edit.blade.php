@extends('master')


@section('content')
    <h1>Edit Category Form</h1>

    <form method="POST" action="
        {{ action('CategoryController@update', $category->id) }}">
        {{ method_field('PATCH') }}
        @include('partials.categoriesForm',
        ['buttonName' => 'Update',
        'name' => $category->name,
        'description'=>$category->description])
        {{ csrf_field() }}
    </form>
    @include('partials.errors')
@endsection

