
@extends('layout')
@section('content')
<h1>All Chapters</h1>
    @foreach($chapters as $chapter)
    <div>
        {{ $chapter->title }}
    </div>
    @endforeach
@stop