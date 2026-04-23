<x-guest-layout >
    <x-authentication-card >
        <x-slot name="logo" >
           <!-- <x-authentication-card-logo /> -->
        </x-slot>

        <x-validation-errors class="mb-4" />
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600" >
                {{ $value }}
            </div>
        @endsession
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>{{ config('app.name', 'Laravel') }}</title>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" id="name" placeholder="Name" name="name" :value="old('name')" required autofocus autocomplete="name" >
                <input type="email" id="email" placeholder="Email" name="email" :value="old('email')" required autocomplete="username" >
                <input type="password" id="password" placeholder="Password" name="password" required autocomplete="new-password" >
                <input type="password" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" >
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <input type="password" placeholder="Password" name="password" required autocomplete="current-password" >
    
                <button>Sign In</button>
            </form>
        </div>
        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                <img src="logo/ghost.png" style="height: 50%;">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                <img src="logo/ghost.png" style="height: 50%;">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</x-authentication-card>
</x-guest-layout>
