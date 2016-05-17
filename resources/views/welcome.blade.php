@extends('layout')
       <!-- <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>

            </div>
        </div>-->
@section('content')
@if(empty($people))
There are no peoples
    @else
    @foreach ($people as $person)
        <li>{{ $person }}</li>
    @endforeach
@endif
@stop

@section('footer')
    <script>
    alert('Hello earthling we have come to eat you');
    </script>
@stop




