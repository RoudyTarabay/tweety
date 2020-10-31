<div class="border border-blue rounded-lg">
    <div class=' pt-2 pb-2 pr-4 pl-4'>
        <form method="post" action="/tweets">
            @csrf
            <div class="form-group">
                <label for=""></label>
                <textarea placeholder="what's up doc?" name="body" class="form-control" required></textarea>
                <hr>
                <div class="d-flex justify-content-between">
                    <img src="{{auth()->user()->avatar}}" class="rounded-circle mr-2" alt="avatar" />

                    <button type="submit" class="btn btn-primary rounded-pill shadow">Tweet-a-roo!</button>
                </div>
            </div>
        </form>
        @error('body')
        <p class='text-danger  text-sm-left pt-2'>{{$message}}</p>
        @enderror
    </div>
</div>
