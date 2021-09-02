@extends('layouts.app')

@section('content')

    <h1 class="display-3 mb-5" style="text-align: center">{{$category->name}}</h1>
    @foreach($similarPosts as $similarPost)

        <div class="col-sm-4 mt-3">
            <img class="card-img-top" src="{{$similarPost->img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$similarPost->title}}</h5>
                <p class="card-text">{{mb_substr($similarPost->body,0,255,'UTF-8') . '...'}}</p>
                <a href="/post/{{$similarPost->id}}" class="link-info" style="margin-top: 30px"><button type="button" class="btn btn-primary">Прочитать полностью</button></a>
            </div>
        </div>

    @endforeach

@endsection
