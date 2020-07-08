<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="items-start lg:flex">
                <div class="lg:w-1/6">
                    @include('_sidebar-links')
                </div>
                <div class="lg:flex-1 lg:mx-10">
                    {{$slot}}
                </div>
                <div class="flex flex-col p-4 bg-blue-100 rounded-lg lg:w-1/6">
                    @include('_follows-list')
                </div>
            </div>
        </main>
    </section>
</x-master>
