@extends('layouts.app')
@section('content')
<header class="mb-4 rounded border border-gray">
    <img src="https://picsum.photos/1000/300" class="img-fluid rounded">
    <div class="d-flex justify-content-between p-4 position-relative">
        <div>
           <h2> {{$user->name}}</h2>
        <p>Joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class="d-flex">
            @can ('edit',$user)
            <div>
                <a class="btn btn-light rounded-pill shadow mr-2" href="{{$user->path('edit')}}">Edit Profile</a>
            </div>
            @endcan
            @if (auth()->user()->isNot($user))
            <form method="POST" action="/profile/{{ $user->name }}/follow">
                @csrf
                <button type="submit" class="btn btn-primary rounded-pill shadow">
                    {{current_user()->following($user)?'Unfollow Me':'Follow Me'}}
                </button>
            </form>
            @endif

        </div>
        <div class="position-absolute"  style="left:calc(50% - 75px);top:-75px;"><img src="{{$user->avatar}}" class="rounded-circle" alt="avatar" width="150px"></div>
    </div>
    <p class='p-3'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima itaque quis, veniam non natus necessitatibus ex sequi ut commodi corrupti unde deleniti distinctio iusto corporis eaque perferendis adipisci nisi sapiente?</p>
</header>
@include('_timeline',['tweets'=>$user->tweets])
@endsection
