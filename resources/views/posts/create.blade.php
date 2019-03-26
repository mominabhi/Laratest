@extends('main')
@section('title','| Create form')
@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="css/parsley.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Create Table</h3>
            <form method="post" action="{{route('posts.store')}}" data-parsley-validate="">
                {{csrf_field()}}
                <div class="form-group">
                    <label name="title">Title:</label>
                    <input type="text" class="form-control" name="title" required="" maxlength="255">
                </div>
                <div class="form-group">
                    <label name="body">Body:</label>
                    <textarea class="form-control" name="body" required=""></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-block" value="Submit the post">
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="js/parsley.min.js"></script>
@endsection
