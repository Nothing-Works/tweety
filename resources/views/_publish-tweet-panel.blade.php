<div class="px-8 py-6 border border-blue-400 rounded-lg">
    <form action="/tweets" method="POST">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's up doc?" required></textarea>
        <hr class="my-4">
        <footer class="flex items-center justify-between">
            <img src="{{current_user()->avatar}}/40" alt="image" class="rounded-full">
            <button type="submit" class="px-2 py-2 text-white bg-blue-500 rounded-lg shadow">Tweet-a-roo!</button>
        </footer>
    </form>
    @error('body')
    <p class="mt-4 text-sm text-red-500">{{$message}}</p>
    @enderror
</div>
