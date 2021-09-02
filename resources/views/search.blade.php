@extends('layouts.app')

@section('content')
    <h1 class="display-3 mb-5" style="text-align: center">Лента</h1>
    @foreach($searchPost as $search)


        <div class="col-sm-4 mt-3">
            <img class="card-img-top" src="{{$search->img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$search->title}}</h5>
                <p class="card-text">{{mb_substr($search->body,0,255,'UTF-8') . '...'}}</p>
                <a href="/post/{{$search->id}}" class="link-info">Прочитать полностью</a>
            </div>
        </div>


    @endforeach


@endsection
