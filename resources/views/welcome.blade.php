@if(\Illuminate\Support\Facades\Auth::user())
    <script>
        window.location = "/dashboard";
    </script>
@endif
<x-app-layout>
<div class="container-fluid mh-100">
    <div class="row">
        <div class="col-6 bg-primary bg-opacity-75">

        </div>
        <div class="col-6 bg-white">
            <x-guest-layout>


                <x-jet-validation-errors class="mb-4"/>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="d-flex justify-content-end">
                    @csrf

                    <div class="">

                        <x-jet-input id="email" class="form-control" type="email"
                                     placeholder="Phone, email, or username" name="email" :value="old('email')" required
                                     autofocus/>
                    </div>

                    <div class="">

                        <x-jet-input id="password" class="form-control" type="password" placeholder="Password"
                                     name="password" required autocomplete="current-password"/>
                        @if (Route::has('password.request'))
                            <a class="float-end mr-5" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="">
                        <x-jet-button class="">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>
            </x-guest-layout>
            <x-guest-layout>
                <x-jet-authentication-card>

                    <x-jet-validation-errors class="mb-4"/>
                    <div class="h2">See what’s happening in the world right now</div>
                    <div class="h3"><b>Join Twitter today.</b></div>


                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="btn btn-primary form-control d-flex justify-content-center ">
                            Sign up</a>
                    @endif
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="btn btn-outline-primary form-control">
                            </i>Login in</a>
                    @endif
                </x-jet-authentication-card>
            </x-guest-layout>
        </div>
    </div>
</div>
</x-app-layout>
