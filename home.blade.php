@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop

@section('content')
    <div class="row">
        <h1>{{ $page->title }}</h1>
        {!! $page->body !!}
    </div>
@stop
