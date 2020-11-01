<div class='row mt-4'>
    <div class="col-1">
        <a href="{{route('profile',$tweet->user)}}">
            <img src="{{auth()->user()->avatar}}" class="rounded-circle pr-3 pl-3" alt="avatar" />
        </a>
    </div>
    <div class="col-11">
        <div class="pl-4 pr-2">
            <a href="{{route('profile',$tweet->user)}}">
                <h5 class="font-weight-bold mb-2">{{$tweet->user->name}}</h5>
            </a>
            <p class="text-sm-left">
                {{$tweet->body}} </p>
        </div>
    </div>
</div>
<hr>
