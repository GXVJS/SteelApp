@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <div class="jumbotron bg-warning">
        <h1>Страница про нас</h1>
        <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
        <a class="btn btn-lg btn-danger" href="#review" role="button">Отзывы »</a>
    </div>
    <h1>Форма добавления отзыва</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
    <br>

    <h1 id="review">Все отзывы</h1>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3> {{ $el->email }}</h3>
            <b>{{ $el->subject }}</b>
            <p>{{ $el->message }}</p>
            <p >Отправил: {{ $el->created_at }}</p>
        </div>
    @endforeach
@endsection
