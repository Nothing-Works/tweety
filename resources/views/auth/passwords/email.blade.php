<x-master>
    <div class="container flex justify-center mx-auto">
        <x-panel>
            <x-slot name="heading">Reset Password</x-slot>

            @if (session('status'))
            <div class="text-sm text-gray-800" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
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
                    <button type="submit" class="px-4 py-2 text-white bg-blue-400 rounded hover:bg-blue-500">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </x-panel>
</x-master>
