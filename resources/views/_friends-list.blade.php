<h3 class="text-xl font-bold">Friends</h3>
<ul>
    @foreach (range(1,8) as $index)
    <li class="mt-4">
        <div class="flex items-center text-sm">
            <img src="https://picsum.photos/40" alt="image" class="mr-2 rounded-full">

            John Doe
        </div>
    </li>
    @endforeach
</ul>
