<h1 class="mb-4 font-weight-bold pt-4">Following</h1>
<ul class="list-unstyled">
    @foreach (auth()->user()->follows as $user)
    <li class="mb-4">
        <div class="d-flex align-items-center">
        <a class="text-decoration-none text-reset" href="{{route('profile',$user)}}"><img src="{{$user->avatar}}" class="rounded-circle mr-2" alt="avatar" /> {{$user->name}}</a>
        </div>
    </li>
    @endforeach
</ul>
