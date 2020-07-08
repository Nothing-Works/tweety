<div class="flex p-4 border-b border-gray-400">
    <div class="flex-shrink-0 mr-2">
        <a href="{{route('profile', $tweet->user)}}"><img src="{{$tweet->user->avatar}}/50" alt="image"
                class="rounded-full"></a>
    </div>

    <div>
        <h5 class="mb-4 font-bold">
            <a href="{{route('profile',$tweet->user)}}">{{$tweet->user->name}}</a>
        </h5>

        <p class="text-sm">{{$tweet->body}}</p>
    </div>
</div>
