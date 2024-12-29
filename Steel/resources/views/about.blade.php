@extends('layout')

@section('title')Страница про нас@endsection

@section('main_content')
    <div class="jumbotron bg-warning">
        <h1>Страница про нас</h1>
        <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
        <a class="btn btn-lg btn-danger" href="/review" role="button">Отзывы »</a>
    </div>
@endsection
