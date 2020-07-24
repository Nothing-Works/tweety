<x-master>
    <div class="container flex justify-center mx-auto">
        <x-panel>
            <x-slot name="heading">Login</x-slot>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Email</label>

                    <input id="email" type="email" class="w-full p-2 border border-gray-400" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Password</label>

                    <input id="password" type="password" class="w-full p-2 border border-gray-400" name="password"
                        required autocomplete="current-password">

                    @error('password')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <div>
                        <input class="mr-1" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="text-xs font-bold text-gray-700 uppercase" for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="px-4 py-2 text-white bg-blue-400 rounded hover:bg-blue-500">
                        Submit
                    </button>

                    <a class="mr-2 text-xs text-gray-700" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>

            </form>
        </x-panel>
    </div>
</x-master>
