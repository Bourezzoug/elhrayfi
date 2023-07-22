<x-guest-layout>
    <div class="grid grid-cols-2">
        <div class="col-span-1 h-screen sticky top-0 left-0" style="background-image: url('{{ asset('images/register.jpeg') }}');background-position:center;background-size:cover;">
        </div>
        <div class="col-span-1">
            <x-authentication-card >
                <x-slot name="logo">
                    <x-authentication-card-logo />
                </x-slot>
        
                <x-validation-errors class="mb-4" />
        
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                
                    <!-- Step 1: Basic Information -->
                    <div x-data="{role_id: 2}">

                        <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Vous êtes :') }}" />
                            <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="" disabled selected>Select Role</option>
                                <option value="2">Artisan</option>
                                <option value="3">Client</option>
                            </select>
                        </div>

                        <div class="mt-4" >
                            <x-label for="name" value="{{ __('Nom Complet') }}" x-show="role_id == 2" />
                            <x-label for="name" value="{{ __('Nom Entreprise') }}" x-show="role_id == 3" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"  :value="old('name')" required  autocomplete="name" />
                        </div>

                        {{-- <div class="mt-4" x-show="role_id == 3">
                            <label for="name" >Nom d'Entreprise</label>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"  :value="old('name')" required  autocomplete="name" />
                        </div> --}}
                
                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"  :value="old('email')" required />
                        </div>
                
                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password"  required autocomplete="new-password" />
                        </div>
                
                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                
                        {{-- <div class="mt-4" x-show="role_id == 2">
                            <x-label for="age" value="{{ __('Age') }}" />
                            <x-input id="age" class="block mt-1 w-full" type="text" name="age"  :value="old('age')" required   />
                        </div> --}}

                        {{-- <div class="mt-4">
                            <x-label for="ville" value="{{ __('Ville') }}" />
                            <x-input id="ville" class="block mt-1 w-full" type="text" :value="old('ville')"  name="ville" />
                        </div> --}}
                
                        {{-- <div class="mt-4">
                            <x-label for="address" value="{{ __('Address') }}" />
                            <x-input id="address" class="block mt-1 w-full" type="text" :value="old('address')" name="address"   />
                        </div> --}}
                

                        

                        
                        <div class="flex items-center justify-end mt-4">
                            <x-button type="submit">
                                {{ __('Enregistrer') }}
                            </x-button>
                        </div>
                    </div>
                

                
                    <!-- Step 4: Terms and Submit -->
                    <div >
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" />
                
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                        @endif
                
                        {{-- <div class="flex items-center justify-end mt-4">
                            <x-button @click="step = 2">
                                {{ __('Previous') }}
                            </x-button>
                            <x-button type="submit">
                                {{ __('Register') }}
                            </x-button>
                        </div> --}}
                    </div>
                    
                </form>
                
                
                

                
                
                
                
                
            </x-authentication-card>
        </div>
    </div>
</x-guest-layout>
