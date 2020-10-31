@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-1">
        @include('_sidebar-links')
    </div>
    <div class="col-8 mx-auto">
        @include('_publish-tweet-panel')
        <div class='border border-gray mt-5 rounded'>
            @foreach ($tweets as $tweet)
            @include('_tweet')
            @endforeach
        </div>
    </div>
    <div class="col-2 bg-info rounded">
        @include('_friends-list')
    </div>
</div>
@endsection
