<div class='border border-gray mt-5 rounded'>
    @forelse ($tweets as $tweet)
        @include('_tweet')
        @empty
        <p class='p-5'>No Tweets yet</p>
    @endforelse
</div>
