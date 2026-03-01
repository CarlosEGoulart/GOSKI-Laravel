@extends('layouts.public')

<div>
    @section('content')
    <x-feed.suggestions />
    <x-feed.posts />
    <x-feed.resume :user="Auth::user()" />
    @endsection
</div>
