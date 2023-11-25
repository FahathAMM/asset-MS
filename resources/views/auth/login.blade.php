{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layout.auth')

@section('content')
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <x-auth.banner />
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div>
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p class="text-muted">Sign in to continue to Velzon.</p>
                                    </div>

                                    <div class="mt-4">
                                        <form action="index.html">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Enter Email" required autofocus>
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <a href="auth-pass-reset-cover.html" class="text-muted">
                                                        Forgot password?
                                                    </a>
                                                </div>
                                                <label class="form-label" for="password-input">Password</label>

                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5 password-input"
                                                        placeholder="Enter password" id="password" name="password"
                                                        required>

                                                    <button
                                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                        type="button" id="password-addon">
                                                        <i class="ri-eye-fill align-middle"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="auth-remember-check" name="remember">
                                                <label class="form-check-label" for="auth-remember-check">
                                                    Remember me
                                                </label>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Sign In</button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <x-auth.socialite />
                                            </div>

                                        </form>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p class="mb-0">Don't have an account ? <a href="auth-signup-cover.html"
                                                class="fw-semibold text-primary text-decoration-underline">
                                                Signup</a> </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </form>
        </div>
        <!-- end row -->
    </div>
@endsection
