<h3 class="text-xl font-bold">Following</h3>
<ul>
    @forelse (current_user()->follows as $follow)
    <li class="mt-4">
        <a href="{{route('profile',$follow)}}" class="flex items-center text-sm">
            <img src="{{$follow->avatar}}" alt="image" class="mr-2 rounded-full" width="50">

            {{$follow->name}}
        </a>
    </li>
    @empty
    <li class="p-4">No followings yet!</li>
    @endforelse
</ul>
