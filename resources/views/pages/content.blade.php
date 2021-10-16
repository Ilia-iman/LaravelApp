@extends('pages.posts')

@section('content')
    <h1>{{ $content  ?? 'die'}}</h1>
    {!! $content3  ?? 'die' !!}
@endsection
