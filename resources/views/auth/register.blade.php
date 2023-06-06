  <head>
        <title>Register</title>

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
                                    <h1 class="bd-breadcrumb-title">Register</h1>

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
            <a href="/">
                    <img src="{{asset('admin-assets/img/bg/preloader.png')}}" alt="img not found!">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>


              <!-- Budget -->
              <div class="mt-4">
                  <x-label for="budget" :value="__('Budget')" />

                  <x-input id="budget" class="block mt-1 w-full" type="number" name="budget" :value="old('budget')" required />
              </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
