<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <h2 class="text-3xl font-bold text-center text black-800 mb-6">LOGIN</h2>
            
        </div>
            
        <!-- Email Address -->
         <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Username / Email</label>
                        <input type="email"
                               name="email"
                               placeholder="Masukkan username"
                               class="w-full mt-1 rounded-md border-gray-300 px-3 py-2 focus:ring-red-500 focus:border-red-500"
                               value="{{ old('email') }}"
                               required>
                    </div>

      <!-- PASSWORD -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password"
                               name="password"
                               placeholder="Masukkan password"
                               class="w-full mt-1 rounded-md border-gray-300 px-3 py-2 focus:ring-red-500 focus:border-red-500"
                               required>
                    </div>
                <!--lupa password  -->
          <div class="flex justify-end mb-4">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                               class="text-2xl text-blue-600 hover:underline">
                                Lupa password?
                            </a>
                        @endif
                    </div>

         <!-- BUTTON -->
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-md font-semibold">
                        LOGIN
                    </button>
        </div>
        <p class="text-center text-2xl text-gray-600 mt-5 my-4">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-red-600 hover:underline">
                            Register
                        </a>
                    </p>
    </form>
</x-guest-layout>
