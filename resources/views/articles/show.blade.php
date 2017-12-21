@extends('layouts.app')

@section('content')

<div class="container">

    <h3>View {{ $article_show->id }}</h3>

    <div class="clearfix">
        <p>
            <strong>Title:</strong> {{ $article_show->title }} </br>
            <strong>Description:</strong> {{ $article_show->description }} </br>
            <strong>Short Description:</strong> {{ $article_show->short_des }} </br>
        </p>
    </div>

</div>
@endsection