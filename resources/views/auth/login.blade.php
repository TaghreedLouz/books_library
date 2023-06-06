<head>
    <title>login</title>

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/main.css')}}">
</head>
    <!-- breadcrumb area start here -->
    <section class="bd-breadcrumb-area p-relative fix theme-bg">
        <!-- breadcrumb background image -->
            <div class="container">
                <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                    <div class="bd-breadcrumb-shape-1">
                        <img src="{{asset('admin-assets/img/shape/curved-line-2.png')}}" alt="img not found!">
                    </div>
                    <div class="bd-breadcrumb-shape-2">
                        <img src="{{asset('admin-assets/img/shape/white-curved-line.png')}}" alt="img not found!">
                </div>

                        <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                            <div class="bd-breadcrumb-content text-center">
                                <h1 class="bd-breadcrumb-title">Login</h1>

                    </div>
                </div>
            </div>
        </div>
        <div class="bd-wave-wrapper bd-wave-wrapper-3">
            <div class="bd-wave bd-wave-3"></div>
            <div class="bd-wave bd-wave-3"></div>
        </div>
    </section>







<x-guest-layout>

    <x-auth-card>
        <x-slot name="logo">
                    <img src="{{asset('admin-assets/img/bg/preloader.png')}}" alt="img not found!">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

            <br>

                                @if (Route::has('register'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                        {{ __('Register?') }}
                                    </a>
                                @endif


            </div>



            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
