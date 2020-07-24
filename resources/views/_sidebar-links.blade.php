<ul>
    <li>
        <a href="{{route('home')}}" class="block mb-4 text-lg font-bold">
            Home
        </a>
    </li>
    <li>
        <a href="/explore" class="block mb-4 text-lg font-bold">
            Explore
        </a>
    </li>
    <li>
        <a href="{{current_user()->path()}}" class="block mb-4 text-lg font-bold">
            Profile
        </a>
    </li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button class="mb-4 text-lg font-bold">Logout</button>
        </form>
    </li>
</ul>
