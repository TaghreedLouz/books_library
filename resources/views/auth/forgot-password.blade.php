
    <head>
        <title>Forgot Password</title>

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
                                    <h1 class="bd-breadcrumb-title">Forgot Password</h1>

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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
