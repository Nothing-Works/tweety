<h3 class="text-xl font-bold">Following</h3>
<ul>
    @foreach (current_user()->follows as $follow)
    <li class="mt-4">
        <a href="{{route('profile',$follow)}}" class="flex items-center text-sm">
            <img src="{{$follow->avatar}}/40" alt="image" class="mr-2 rounded-full">

            {{$follow->name}}
        </a>
    </li>
    @endforeach
</ul>
