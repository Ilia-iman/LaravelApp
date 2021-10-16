@extends('base')

@section('header')
    <img src="logo.jpg" alt="logo">
    <ul class="menu">
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
        <li>Item 4</li>
    </ul>
@endsection

@section('footer')
    <ul class="bottomMenu">
        <li>item 1</li>
        <li>item 2</li>
        <li>item 3</li>
        <li>item 4</li>
    </ul>
@endsection

@section('content2')
    @include($template)
@endsection
