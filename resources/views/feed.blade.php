@extends('layouts.public')

@section('content')
    <div class="mx-auto mt-6 w-full">
        <div class="flex space-x-6">
            <div class="w-3/12">
                <x-feed.suggestions />
            </div>
            <div class="w-6/12">
                <x-feed.posts />
            </div>
            <div class="w-3/12">
                <x-feed.resume />
            </div>
        </div>
    </div>
@endsection
