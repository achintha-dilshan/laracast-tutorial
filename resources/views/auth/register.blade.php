<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create Your Account</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Join us today and register with just a few simple steps!
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-3">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="first_name" id="first_name" placeholder="John" :value="old('first_name')" />
                        </div>

                        <x-form-error name="first_name" />
                    </div>

                    <div class="sm:col-span-3">
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="last_name" id="last_name" placeholder="Doe" :value="old('last_name')" />
                        </div>

                        <x-form-error name="last_name" />
                    </div>

                    <div class="sm:col-span-full">
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" placeholder="john@example.com" :value="old('email')" />
                        </div>

                        <x-form-error name="email" />
                    </div>

                    <div class="sm:col-span-3">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" placeholder="********" />
                        </div>

                        <x-form-error name="password" />
                    </div>

                    <div class="sm:col-span-3">
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation"
                                id="password_confirmation" placeholder="********" />
                        </div>

                        <x-form-error name="password_confirmation" />
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>
