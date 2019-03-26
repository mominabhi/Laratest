@extends('main')
@section('title','| contact')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h3>Contact Me</h3>
        <form>
            <div class="form-group">
                <label name="email">Email:</label>
                <input class="form-control" name="email">
            </div>
            <div class="form-group">
                <label name="subject">Subject:</label>
                <input class="form-control" name="email">
            </div>

            <div class="form-group">
                <label name="massage">Massage:</label>
                <textarea class="form-control" name="msg">Text me massage......</textarea>
            </div>
            <input type="button" class="btn btn-success" value="Massage send">
        </form>
    </div>
</div>
@endsection
