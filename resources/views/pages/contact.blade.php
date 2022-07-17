@extends('master')

@section('content')
    <h1>Contact Page

        @if(!empty($email))
            {{$email}}
        @else
            No email address given
        @endif

    </h1>
@endsection


