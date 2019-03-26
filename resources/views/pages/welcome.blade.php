@extends('main')
@section('title','| Homepage')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">WelCome To our Blog</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger
                    container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <diV class="post">
                <h3>Post Title</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,</p>
                <button class="btn btn-primary">Read More...</button>
            </diV>
            <hr>
            <diV class="post">
                <h3>Post Title</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,</p>
                <button class="btn btn-primary">Read More...</button>
            </diV>
            <hr>
            <diV class="post">
                <h3>Post Title</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,</p>
                <button class="btn btn-primary">Read More...</button>
            </diV>
            <hr>
            <diV class="post">
                <h3>Post Title</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,</p>
                <button class="btn btn-primary">Read More...</button>
            </diV>
            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>SideBer</h2>
        </div>
    </div>

@endsection


{{--@section('scripts')--}}
    {{--<script>--}}
        {{--confirm('The page is loaded')--}}
    {{--</script>--}}
{{--@endsection--}}
