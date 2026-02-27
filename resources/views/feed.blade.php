@extends('layouts.public')

@section('content')
    <x-feed.resume :user="Auth::user()"/>
    <x-feed.posts/>

    
@endsection
