<div class="flex p-4 {{$loop->last ? '' : 'border-b border-gray-400'}}">
    <div class="flex-shrink-0 mr-2">
        <a href="{{$tweet->user->path()}}"><img src="{{$tweet->user->avatar}}" alt="image" class="rounded-full"
                width="50"></a>
    </div>

    <div>
        <h5 class="mb-4 font-bold">
            <a href="{{$tweet->user->path()}}">{{$tweet->user->name}}</a>
        </h5>

        <p class="text-sm">{{$tweet->body}}</p>
    </div>
</div>
