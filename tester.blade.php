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
        
                <form method="POST" action="{{ route('register') }}" x-data="{ step: 1, role_id: '',address : '',name: '',email: '',pw: '',age: '',ville: '' }">
                    @csrf
                
                    <!-- Step 1: Basic Information -->
                    <div x-show="step === 1">
                        <div>
                            <x-label for="name" value="{{ __('Nom Complet') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" x-model="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                
                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" x-model="email" :value="old('email')" required />
                        </div>
                
                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" x-model="pw" required autocomplete="new-password" />
                        </div>
                
                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                
                        <div class="mt-4">
                            <x-label for="age" value="{{ __('Age') }}" />
                            <input id="age" class="block mt-1 w-full" type="text" name="age" x-model="age" :value="old('age')" required >
                        </div>

                        <div class="mt-4">
                            <x-label for="ville" value="{{ __('Ville') }}" />
                            <x-input id="ville" class="block mt-1 w-full" type="text" :value="old('ville')" x-model="ville" name="ville" />
                        </div>
                
                        <div class="mt-4">
                            <x-label for="address" value="{{ __('Address') }}" />
                            <x-input id="address" class="block mt-1 w-full" type="text" :value="old('address')" name="address" x-model="address"   />
                        </div>
                
                        <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Vous êtes :') }}" />
                            <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="" disabled selected>Select Role</option>
                                <option value="2">Artisan</option>
                                <option value="3">Client</option>
                            </select>
                        </div>
                
                        <div class="flex items-center justify-end mt-4">
                            <x-button type="button" @click="step = 2" x-bind:disabled="role_id === '' || address === ''|| name === '' || email === '' || pw === '' || age === '' || ville === ''">
                                {{ __('Next') }}
                            </x-button>
                        </div>
                    </div>
                
                    <!-- Step 2: Additional Fields for Artisan -->
                    <div x-show="step === 2 && role_id == 2">
                        <div>
                            <div class="flex flex-row items-center justify-center">
                            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                <!-- Profile Photo File Input -->
                                <input type="file" class="hidden"
                                            wire:model="equipe1_logo"
                                            x-ref="equipe1_logo"
                                            x-on:change="
                                                    photoName = $refs.equipe1_logo.files[0].name;
                                                    const reader = new FileReader();
                                                    reader.onload = (e) => {
                                                        photoPreview = e.target.result;
                                                    };
                                                    reader.readAsDataURL($refs.equipe1_logo.files[0]);
                                            " />
                                <div class="w-24 h-24 bg-gray-200 rounded-full" x-show="! photoPreview">
                                    {{-- @if(!empty($equipe1_logo))
                                    <img src="{{ $equipe1_logo }}" alt="{{ $equipe1_logo }}" class="h-full w-full object-cover">
                                    @endif --}}
                                </div>
                                <div class="w-24 h-24 bg-gray-200 rounded-full" x-show="photoPreview" style="display: none;">
                                    <span class="block w-full h-full bg-cover bg-no-repeat bg-center rounded-full"
                                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                    </span>
                                </div>
                                <button class="-mt-10 mr-2 p-3 rounded-full bg-emerald-500" type="button" x-on:click.prevent="$refs.equipe1_logo.click()">
                                    <svg wire:target="equipe1_logo" wire:loading.class="animate-bounce" class="w-4 h-4 text-white " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                    </svg>
                                </button>
                
                                <x-input-error for="equipe1_logo" class="mt-2" />
                            </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <x-label for="categorie" value="{{ __('Catégorie:') }}" />
                            <select name="categorie" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="Plombier">Plombier</option>
                                <option value="Electricien">Electricien</option>
                                <option value="Jardinier">Jardinier</option>
                                <option value="Mécanicien">Mécanicien</option>
                                <option value="Menuisier">Menuisier</option>
                                <option value="Peintre">Peintre</option>
                                <option value="Constructeur">Constructeur</option>
                                <option value="Forgeron">Forgeron</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                
                        <div class="mt-4">
                            <x-label for="CV" value="{{ __('Votre Cv') }}" />
                            <x-input id="CV" class="block mt-1 w-full p-2" type="file" :value="old('CV')" name="CV" />
                        </div>
                
                        <div class="mt-4">
                            <x-label for="resume" value="{{ __('Une petite resume') }}" />
                            <textarea id="resume" rows="5" class="block mt-1 w-full border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="resume"></textarea>
                        </div>

                        <div class="mt-4">
                            <x-label for="portfolio" value="{{ __('Votre portfolio images') }}" />
                            <x-input id="portfolio" class="block mt-1 w-full p-2" type="file" :value="old('portfolio')" name="CV" />
                        </div>
                
                        <div class="flex items-center justify-end mt-4 space-x-4">
                            <x-button @click="step = 1">
                                {{ __('Previous') }}
                            </x-button>
                            <x-button type="submit">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </div>
                
                    <!-- Step 3: Additional Fields for Client -->
                    <div x-show="step === 2 && role_id == 3">
                        <div>
                            <div class="flex flex-row items-center justify-center">
                            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                <!-- Profile Photo File Input -->
                                <input type="file" class="hidden"
                                            wire:model="equipe1_logo"
                                            x-ref="equipe1_logo"
                                            x-on:change="
                                                    photoName = $refs.equipe1_logo.files[0].name;
                                                    const reader = new FileReader();
                                                    reader.onload = (e) => {
                                                        photoPreview = e.target.result;
                                                    };
                                                    reader.readAsDataURL($refs.equipe1_logo.files[0]);
                                            " />
                                <div class="w-24 h-24 bg-gray-200 rounded-full" x-show="! photoPreview">
                                    {{-- @if(!empty($equipe1_logo))
                                    <img src="{{ $equipe1_logo }}" alt="{{ $equipe1_logo }}" class="h-full w-full object-cover">
                                    @endif --}}
                                </div>
                                <div class="w-24 h-24 bg-gray-200 rounded-full" x-show="photoPreview" style="display: none;">
                                    <span class="block w-full h-full bg-cover bg-no-repeat bg-center rounded-full"
                                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                    </span>
                                </div>
                                <button class="-mt-10 mr-2 p-3 rounded-full bg-emerald-500" type="button" x-on:click.prevent="$refs.equipe1_logo.click()">
                                    <svg wire:target="equipe1_logo" wire:loading.class="animate-bounce" class="w-4 h-4 text-white " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                    </svg>
                                </button>
                
                                <x-input-error for="equipe1_logo" class="mt-2" />
                            </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-label for="client_type" value="{{ __('Vous êtes :') }}" />
                            <select name="client_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="Particulier">Particulier</option>
                                <option value="Entreprise">Entreprise</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="site_web" value="{{ __('Votre site web') }}" />
                            <x-input id="site_web" class="block mt-1 w-full" type="text" :value="old('site_web')" name="site_web" />
                        </div>
                
                        <div class="flex items-center justify-end mt-4 space-x-4">
                            <x-button @click="step = 1">
                                {{ __('Previous') }}
                            </x-button>
                            <x-button type="submit">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </div>
                
                    <!-- Step 4: Terms and Submit -->
                    <div x-show="step === 3">
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
