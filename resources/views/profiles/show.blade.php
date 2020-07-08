<x-app>
    <header class="relative">
        <img src="/images/default-profile-banner.jpg" alt="banner">

        <div class="flex items-center justify-between mt-2">
            <div>
                <h2 class="text-2xl font-bold">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div>
                <button class="px-4 py-2 mr-2 text-xs text-black border border-gray-300 rounded-full">Edit
                    Profile</button>
                <button class="px-4 py-2 text-xs text-white bg-blue-500 rounded-full shadow">Follow Me</button>
            </div>
        </div>
        <p class="mt-4 text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dignissimos quam
            voluptatibus
            accusamus
            perferendis adipisci, non, perspiciatis incidunt esse repellat quibusdam nostrum maxime. Laudantium vero ea
            sunt
            asperiores animi nemo.</p>

        <img src="{{$user->avatar}}/200" alt="image" class="absolute rounded-full"
            style="width: 150px; left: calc(50% - 75px); top: 138px;">
    </header>

    @include('_timeline',['tweets'=> $user->tweets])
</x-app>
