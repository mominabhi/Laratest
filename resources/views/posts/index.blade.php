@extends('main')
@section('title','| Posts')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>All Posts</h3>
        </div>
        <div class="col-md-4">
            <a href="{{route('posts.create')}}" class="btn btn-primary ">Create New post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
           <table class="table">
               <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Updated At</th>
               <th></th>
               </thead>
               <tbody>
                @foreach( $posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td> {{substr($post->body,0,10)}} {{strlen($post->body)>10?"...":""}} </td>
                        <td>{{date('M j,Y',strtotime($post->created_at))}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-dark">View</a> <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a></td>
                    </tr>

                @endforeach
               </tbody>
           </table>
        </div>
    </div>
@stop
