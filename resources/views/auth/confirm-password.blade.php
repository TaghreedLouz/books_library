<head>
    <title>Password Confirm</title>

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
                                <h1 class="bd-breadcrumb-title">Password Confirm</h1>

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
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
