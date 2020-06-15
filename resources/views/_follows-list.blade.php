<h3 class="text-xl font-bold">Following</h3>
<ul>
    @foreach (auth()->user()->follows as $follow)
    <li class="mt-4">
        <div class="flex items-center text-sm">
            <img src="{{$follow->avatar}}/40" alt="image" class="mr-2 rounded-full">

            {{$follow->name}}
        </div>
    </li>
    @endforeach
</ul>
