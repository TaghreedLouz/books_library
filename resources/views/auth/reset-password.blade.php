 <head>
          <title>Reset Password</title>

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
                                      <h1 class="bd-breadcrumb-title">Reset Password</h1>

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

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
