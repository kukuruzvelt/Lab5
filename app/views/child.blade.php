@extends('parent')
@section('title', 'Blade-child')

@section('body-content')
@parent
<div>
This is your message: {{$message}}
<br>

@foreach ($mas as $elem)
<p>elem = {{ $elem }}</p>
@endforeach

@if ($bool === 1)
true
@else
false
@endif

    <div>
        @endsection
