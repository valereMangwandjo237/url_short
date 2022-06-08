@extends("layouts.app")
@section("content")
<h1>Your url shortened here!!</h1>
<a href="{{ route('show', ['shortened'=>$shortened]) }}" target="_blank">
    {{ config('app.url') }}/{{$shortened}}
</a>
@stop