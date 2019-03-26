@extends('main')
@section('title','| Edit')
@section('content')
    <div class="row">
        <div class="col-md-8">

            <form method="put" action="{{route('posts.update',$post->id)}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label name="title">Title:</label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}" >
                </div>
                <div class="form-group">
                    <label name="body">Body:</label>
                    <textarea class="form-control" name="body">{{$post->body}}</textarea>
                </div>
                <input type="submit" class="btn btn-success btn-block" value="Update" name="submit">
            </form>
        </div>
        {{--<div class="col-md-4">--}}
            {{--<div class="well">--}}
                {{--<dl class="dl-horizontal">--}}
                    {{--<dt>Created at:</dt>--}}
                    {{--<dd>{{ date('j F,Y h:i:sa',strtotime($post->created_at))}}</dd>--}}
                {{--</dl>--}}
                {{--<dl class="dl-horizontal">--}}
                    {{--<dt>Updated at:</dt>--}}
                    {{--<dd>{{ date('j F,Y h:i:sa',strtotime($post->updated_at))}}</dd>--}}
                {{--</dl>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<a href="{{route('posts.show',$post->id)}}" class="btn btn-danger btn-block">Cancel</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>

@endsection()
