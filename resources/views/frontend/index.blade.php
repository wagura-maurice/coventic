@extends('layouts.frontend')

@section('page-content')
<div class="content">
    <small>Welcome to Our</small>
    <h1>World's Creative Studio</h1>
    <button type="button">Take a Tour</button>
</div>
<div class="side-bar">
    <img src="{!! asset('storage/template/images/menu.png') !!}" class="menu">
    <div class="social-links">
        <img src="{!! asset('storage/template/images/fb.png') !!}">
        <img src="{!! asset('storage/template/images/ig.png') !!}">
        <img src="{!! asset('storage/template/images/tw.png') !!}">
    </div>
    <div class="useful-links">
        <img src="{!! asset('storage/template/images/share.png') !!}">
        <img src="{!! asset('storage/template/images/info.png') !!}">
    </div>
</div>
<div class="bubbles">
    <img src="{!! asset('storage/template/images/bubble.png') !!}">
    <img src="{!! asset('storage/template/images/bubble.png') !!}">
    <img src="{!! asset('storage/template/images/bubble.png') !!}">
    <img src="{!! asset('storage/template/images/bubble.png') !!}">
    <img src="{!! asset('storage/template/images/bubble.png') !!}">
    <img src="{!! asset('storage/template/images/bubble.png') !!}">
    <img src="{!! asset('storage/template/images/bubble.png') !!}">
</div>
@endsection