
<x-auth-layout>
    <x-auth-session-status class="auth-session-status" :status="session('status')" />

    <form method="POST" action="{{ route('register') }}" class="auth-form">
        @csrf
        
        {{-- NRIC Number --}}
        <div class="auth-field">
            <x-input-label for="nric" :value="__('NRIC Number')" class="auth-label" />

            <div class="auth-input-wrapper">
                <svg class="auth-input-icon" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <circle cx="8.5" cy="11" r="2" />
                    <path d="M6 16c.7-1.5 4.3-1.5 5 0" />
                    <path d="M14 10h4M14 14h4" />
                </svg>

                <x-text-input id="nric" class="auth-input auth-input-with-icon" type="text" name="nric" :value="old('nric')" placeholder="Enter your NRIC number" required autocomplete="off" />
            </div>

            <x-input-error :messages="$errors->get('nric')" class="auth-error" />
        </div>

        {{-- Full Name --}}
        <div class="auth-field">
            <x-input-label for="name" :value="__('Full name')" class="auth-label" />

            <div class="auth-input-wrapper">
                <svg class="auth-input-icon" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="8" r="4" />
                    <path d="M5 21v-2a7 7 0 0 1 14 0v2" />
                </svg>

                <x-text-input id="name" class="auth-input auth-input-with-icon" type="text" name="name" :value="old('name')" placeholder="Enter your full name" required autofocus autocomplete="name" />
            </div>

            <x-input-error :messages="$errors->get('name')" class="auth-error" />
        </div>

        {{-- Email --}}
        <div class="auth-field">
            <x-input-label for="email" :value="__('Email')" class="auth-label" />

            <div class="auth-input-wrapper">
                <svg class="auth-input-icon" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <path d="m3 7 9 6 9-6" />
                </svg>

                <x-text-input id="email" class="auth-input auth-input-with-icon" type="email" name="email" :value="old('email')" placeholder="Enter your email address" required autocomplete="username" />
            </div>

            <x-input-error :messages="$errors->get('email')" class="auth-error" />
        </div>

        {{-- Create Password --}}
        <div class="auth-field">
            <x-input-label for="password" :value="__('Password')" class="auth-label" />

            <div class="auth-input-wrapper auth-password-wrapper">
                <svg class="auth-input-icon" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="4" y="10" width="16" height="11" rx="2" />
                    <path d="M8 10V7a4 4 0 0 1 8 0v3" />
                </svg>

                <x-text-input id="password" class="auth-input auth-input-with-icon auth-password-input" type="password" name="password" placeholder="Create a password" required autocomplete="new-password" />
                <button type="button" class="auth-password-toggle" data-password-toggle aria-label="Show password" aria-controls="password" aria-pressed="false" >Show</button>
            </div>

            <p class="auth-password-hint">Minimum 8 characters. Use a combination of letters and numbers.</p>
            <x-input-error :messages="$errors->get('password')" class="auth-error" />
        </div>

        {{-- Confirm Password --}}
        <div class="auth-field">
            <x-input-label for="password_confirmation" :value="__('Confirm password')" class="auth-label" />

            <div class="auth-input-wrapper auth-password-wrapper">
                <svg class="auth-input-icon" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="4" y="10" width="16" height="11" rx="2" />
                    <path d="M8 10V7a4 4 0 0 1 8 0v3" />
                </svg>

                <x-text-input id="password_confirmation" class="auth-input auth-input-with-icon auth-password-input" type="password" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password" />
                <button type="button" class="auth-password-toggle" data-password-toggle aria-label="Show password" aria-controls="password_confirmation" aria-pressed="false" >Show</button>
            </div>

            <x-input-error :messages="$errors->get('password_confirmation')" class="auth-error" />
        </div>

        {{-- Terms and Privacy Agreement --}}
        <div class="auth-terms">
            <label for="terms" class="auth-terms-label">
                <input id="terms" type="checkbox" name="terms" value="1" class="auth-checkbox" required />

                <span> You agree to our
                    <a href="{{ url('/terms') }}" class="auth-terms-link"> Terms of Service </a>
                    and
                    <a href="{{ url('/privacy') }}" class="auth-terms-link"> Privacy Policy </a>.
                </span>
            </label>
        </div>

        {{-- Submit --}}
        <button type="submit" class="auth-submit">
            Create account
        </button>

        @if (Route::has('auth.google.redirect'))
            {{--<a href="{{ route('auth.google.redirect') }}" class="auth-google-button">
                <svg class="auth-google-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48" aria-hidden="true" >
                    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z" transform="translate(0 4)"/>
                    <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.76 7.18l7.73 6C44.42 37.92 46.98 31.8 46.98 24.55z"/>
                    <path fill="#FBBC05" d="M10.53 28.59A14.4 14.4 0 0 1 9.75 24c0-1.59.27-3.13.76-4.59l-7.98-6.19A23.9 23.9 0 0 0 0 24c0 3.87.93 7.52 2.56 10.78l7.97-6.19z" transform="translate(1 0)"/>
                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.91-5.8l-7.73-6c-2.14 1.44-4.89 2.3-8.18 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z" transform="translate(0 -2)"/>
                </svg>

                <span>Continue with Google</span>
            </a>
            --}}
        @endif

        {{-- Google Login - UI sementara --}}
        <a href="/" class="auth-google-button" aria-label="Continue with Google">
            <svg class="auth-google-icon" xmlns="http://www.w3.org/2000/svg"
                width="20" height="20" viewBox="0 0 48 48" aria-hidden="true">
                <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z" transform="translate(0 4)"/>
                <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.76 7.18l7.73 6C44.42 37.92 46.98 31.8 46.98 24.55z"/>
                <path fill="#FBBC05" d="M10.53 28.59A14.4 14.4 0 0 1 9.75 24c0-1.59.27-3.13.76-4.59l-7.98-6.19A23.9 23.9 0 0 0 0 24c0 3.87.93 7.52 2.56 10.78l7.97-6.19z" transform="translate(1 0)"/>
                <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.91-5.8l-7.73-6c-2.14 1.44-4.89 2.3-8.18 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z" transform="translate(0 -2)"/>
            </svg>

            <span>Continue with Google</span>
        </a>
    </form>
</x-auth-layout>
