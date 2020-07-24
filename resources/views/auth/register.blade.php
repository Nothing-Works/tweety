<x-master>
    <div class="container flex justify-center mx-auto">
        <x-panel>
            <x-slot name="heading">Register</x-slot>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Username</label>

                    <input id="username" type="text" class="w-full p-2 border border-gray-400" name="username"
                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Name</label>

                    <input id="name" type="text" class="w-full p-2 border border-gray-400" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Email</label>

                    <input id="email" type="email" class="w-full p-2 border border-gray-400" name="email"
                        value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Password</label>

                    <input id="password" type="password" class="w-full p-2 border border-gray-400" name="password"
                        required autocomplete="new-password">

                    @error('password')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password-confirm" class="block mb-2 text-xs font-bold text-gray-700 uppercase">Password
                        Confirmation</label>

                    <input id="password-confirm" type="password" class="w-full p-2 border border-gray-400"
                        name="password_confirmation" required autocomplete="new-password">

                    @error('password_confirmation')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="px-4 py-2 text-white bg-blue-400 rounded hover:bg-blue-500">
                        Register
                    </button>
                </div>
            </form>
        </x-panel>
</x-master>
