<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex items-center justify-center min-h-screen">
        <form method="POST" action="{{ route('login') }}" class="p-6 bg-white shadow-lg transition-transform transform hover:scale-105 w-full max-w-md">
            @csrf

            <div class="flex items-center mb-6 ml-4">
                <!-- Logo Image -->
                <img src="{{ asset('asset/photo/logoipg.png') }}" alt="IPG Logo" width="70" height="80" class="mr-4">
    
                <!-- Title, aligned to the left -->
                <div class="text-left">
                    <h2 class="text-2xl text-gray-800">Welcome To</h2>
                    <h2 class="text-3xl text-gray-800">IPGKI-edu Gather</h2>
                </div>
            </div>
    
            <div class="mb-3">
                <label for="userIC" class="block text-gray-700 font-semibold">{{ __('Identity Card Number') }}</label>
                <input id="userIC" type="text" name="ic" value="{{ old('userIC') }}" required autocomplete="userIC" autofocus
                    class="mt-2 form-control block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all @error('userIC') border-red-500 @enderror">
                @error('userIC')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="mb-4">
                <label for="userPassword" class="block text-gray-700 font-semibold">{{ __('Password') }}</label>
                <input id="userPassword" type="password" name="password" required autocomplete="current-password"
                    class="mt-2 form-control block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all @error('userPassword') border-red-500 @enderror">
                @error('userPassword')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="mb-6 flex items-center">
                <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                    class="h-5 w-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-500">
                <label for="remember" class="ml-2 text-sm text-gray-700">{{ __('Remember Me') }}</label>
            </div>
    
            <div class="flex items-center justify-between mb-6">
                <button type="submit" class="btn btn-primary w-full py-2 bg-blue-600 text-white font-medium rounded-lg shadow hover:bg-blue-500 transition-all focus:outline-none focus:ring-2 focus:ring-blue-400">
                    {{ __('Login') }}
                </button>
            </div>
    
            <div class="text-center">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline transition-all">{{ __('Forgot Password?') }}</a>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>
