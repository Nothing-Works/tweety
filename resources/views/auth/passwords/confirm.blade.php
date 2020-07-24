<x-master>
    <div class="container flex justify-center mx-auto">
        <x-panel>
            <x-slot name="heading">Confirm Password</x-slot>

            {{ __('Please confirm your password before continuing.') }}

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-6">
                    <label for="password" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Password</label>

                    <input id="password" type="password" class="w-full p-2 border border-gray-400" name="password"
                        required autocomplete="current-password">

                    @error('password')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="px-4 py-2 text-white bg-blue-400 rounded hover:bg-blue-500">
                        Confirm Password
                    </button>
                    <a class="text-xs text-gray-700" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </form>
        </x-panel>
    </div>
</x-master>
