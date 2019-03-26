@extends('main')
@section('title','| ShowPost')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>{{$post->title}}</h3>
            <p class="lead">{{$post->body}}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{ date('j F,Y h:i:sa',strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Updated at:</dt>
                    <dd>{{ date('j F,Y h:i:sa',strtotime($post->updated_at))}}</dd>
                </dl>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('posts.destroy',$post->id)}}" class="btn btn-danger btn-block">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
