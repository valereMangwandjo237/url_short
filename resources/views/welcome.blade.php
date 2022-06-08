@extends("layouts.app")
@section("content")
<h1>Find your url shortener here !</h1>
<form method="post" action="">
    <p>{{$errors->first('url')}}</p>
    {{csrf_field()}}
    <input type="text" name="url" placeholder="Enter your original url" class="form-control" value="{{ old('url') }}">
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@stop