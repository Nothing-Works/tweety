<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="items-start lg:flex">
                @if(auth()->check())
                <div class="lg:w-1/6">
                    @include('_sidebar-links')
                </div>
                @endif
                <div class="lg:flex-1 lg:mx-10">
                    {{$slot}}
                </div>
                @if(auth()->check())
                <div class="flex flex-col p-4 bg-blue-100 rounded-lg lg:w-1/6">
                    @include('_follows-list')
                </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
