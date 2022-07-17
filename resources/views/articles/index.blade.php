@extends('master')

@section('content')
    <h1>All Articles</h1>
    @foreach($articles as $article)
        ID : {{$article->id}}<br>
        Name : {{$article->name}}<br>
        Body : {{$article->body}}<br>
        Author ID : {{$article->author_id}}<br>
        Tags:
        @foreach($article->tags as $tag)
            {{ $tag->name }}
        @endforeach
        <br>
        <form method="post" action="{{ action('ArticleController@destroy', $article->id) }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input type="submit" value="Delete">
        </form>
        <br><br>
    @endforeach

    {{ $articles->links() }}
@endsection
