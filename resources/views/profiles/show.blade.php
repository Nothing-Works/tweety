<x-app>
    <header>
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="banner">

            <img src="{{$user->avatar}}" alt="image"
                class="absolute bottom-0 transform -translate-x-1/2 translate-y-1/2 rounded-full" style="left: 50%;"
                width="150">
        </div>

        <div class="flex items-center justify-between mt-2">
            <div>
                <h2 class="text-2xl font-bold">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                @can ('edit', $user)
                <a href="{{$user->path('edit')}}"
                    class="px-4 py-2 mr-2 text-xs text-black border border-gray-300 rounded-full">Edit
                    Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="mt-6 text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dignissimos quam
            voluptatibus
            accusamus
            perferendis adipisci, non, perspiciatis incidunt esse repellat quibusdam nostrum maxime. Laudantium vero ea
            sunt
            asperiores animi nemo.</p>
    </header>
    @include('_timeline',['tweets'=> $user->tweets()->latest()->get()])
</x-app>
