 <head>
          <title>Verify Email</title>

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
                                      <h1 class="bd-breadcrumb-title">Verify Email</h1>

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
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
