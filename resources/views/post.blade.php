@extends('layouts.app')

@section('content')

        <div class="col-sm-4 mt-3 mb-5">
            <h3 style="width: 600px;margin-left: 350px; text-align: center; margin-bottom: 20px">{{$post->title}}</h3>
            <img style="width: 600px; height: 400px; margin-left: 350px;" src="{{$post->img}}" alt="Card image cap">
                <div class="mt-5">
                    <div style="width: 1000px; text-align: center; margin-left: 150px" class="mt-5">{{$post->body}}</div>

                    <div class="row mt-5" style="margin-left: 155px;">
                        <div class="col">
                            <a href="/" class="link-info" style="float: right;margin-top: 30px"><button type="button" class="btn btn-primary">На главную странницу</button></a>
                        </div>
                        <div class="col">
                            <a href="/similar/{{ $post->category }}" class="link-info" style="float: left;margin-top: 30px"><button type="button" class="btn btn-primary">Похожие новости</button></a>
                        </div>
                    </div>
            </div>
        </div>


@endsection
