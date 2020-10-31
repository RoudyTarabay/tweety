<h1 class="mb-4 font-weight-bold pt-4">Friends</h1>
<ul class="list-unstyled">
    @foreach (range(1,8) as $index)
    <li class="mb-4">
        <div class="d-flex align-items-center">
            <img src="https://i.pravatar.cc/40" class="rounded-circle mr-2" alt="avatar" /> John Doe
        </div>
    </li>
    @endforeach
</ul>
