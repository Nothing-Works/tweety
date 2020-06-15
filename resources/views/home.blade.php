@extends('layouts.app')

@section('content')
<div class="lg:flex">
    <div class="lg:w-1/6">
        @include('_sidebar-links')
    </div>
    <div class="lg:flex-1 lg:mx-10">
        @include('_publish-tweet-panel')
        <div class="mt-8 border border-gray-300 rounded-lg">
            @include('_tweet')
            @include('_tweet')
            @include('_tweet')
            @include('_tweet')
            @include('_tweet')
        </div>
    </div>
    <div class="flex flex-col p-4 bg-blue-100 rounded-lg lg:w-1/6">
        @include('_friends-list')
    </div>
</div>
@endsection
