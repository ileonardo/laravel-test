<x-card>
    <x-card-header>
        <x-card-title>
            {{ __('Login') }}
        </x-card-title>

        <x-slot name="right">
            <a href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        </x-slot>
    </x-card-header>

    <x-card-body>
        <x-form action="{{ route('login.store') }}" method="POST">
            <x-form-item>
                <x-label required>{{ __('Email') }}</x-label>
                <x-input type="email" name="email" autofocus/>
            </x-form-item>

            <x-form-item>
                <x-label required>{{ __('Password') }}</x-label>
                <x-input type="password" name="password" />
            </x-form-item>

            <x-form-item>
                <x-checkbox name="remember">
                    {{ __('Remember me') }}
                </x-checkbox>
            </x-form-item>

            <x-button type="submit">
                {{ __('Submit') }}
            </x-button>
        </x-form>
    </x-card-body>
</x-card>
