<x-guest-layout>
    <div class="grid grid-cols-2">
        <div class="col-span-1" style="background-image: url('{{ asset('images/register.jpeg') }}');background-position:center;background-size:cover;">
        </div>
        <div class="col-span-1">
            <x-authentication-card >
                <x-slot name="logo">
                    <x-authentication-card-logo />
                </x-slot>
        
                <x-validation-errors class="mb-4" />
        
<form method="POST" action="{{ route('register') }}" x-data="{ step: 1, role_id: '', errors: [] }" id="myForm">
    @csrf

    <!-- Step 1: Basic Information -->
    <div x-show="step === 1" id="step1">
        <div>
            <x-label for="nom" value="{{ __('Nom Complet') }}" />
            <x-input id="nom" class="block mt-1 w-full" type="text" name="name" :value="old('name')" x-ref="nameInput" autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" x-ref="emailInput" />
        </div>

        <div class="mt-4">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" x-ref="passwordInput" />
        </div>

        <div class="mt-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" x-ref="passwordConfirmationInput" />
        </div>

        <div class="mt-4">
            <x-label for="age" value="{{ __('Age') }}" />
            <x-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')" x-ref="ageInput" />
        </div>

        <div class="mt-4">
            <x-label for="address" value="{{ __('Address') }}" />
            <x-input id="address" class="block mt-1 w-full" type="text" :value="old('address')" name="address" x-ref="addressInput" />
        </div>

        <div class="mt-4">
            <x-label for="role_id" value="{{ __('Register as:') }}" />
            <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option value="" disabled selected>Select Role</option>
                <option value="2">Artisan</option>
                <option value="3">Client</option>
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button x-on:click="validateStep1()" x-bind:disabled="role_id === ''">
                {{ __('Next') }}
            </x-button>
        </div>
    </div>

    <!-- Step 2: Additional Fields for Artisan -->
    <div x-show="step === 2 && role_id == 2" id="step2">
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

        <div class="flex items-center justify-end mt-4">
            <x-button x-on:click="step = 1">
                {{ __('Previous') }}
            </x-button>
            <x-button x-on:click="validateStep2">
                {{ __('Next') }}
            </x-button>
        </div>
    </div>

    <!-- Step 3: Additional Fields for Client -->
    <div x-show="step === 2 && role_id == 3">
        <div class="mt-4">
            <x-label for="teacher_qualifications" value="{{ __('Qualifications') }}" />
            <x-input id="teacher_qualifications" class="block mt-1 w-full" type="text" :value="old('teacher_qualifications')" name="teacher_qualifications" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button x-on:click="step = 1">
                {{ __('Previous') }}
            </x-button>
            <x-button x-on:click="validateStep2">
                {{ __('Next') }}
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

        <div class="flex items-center justify-end mt-4">
            <x-button x-on:click="step = 2">
                {{ __('Previous') }}
            </x-button>
            <x-button type="submit">
                {{ __('Register') }}
            </x-button>
        </div>
    </div>

    <script>
        function scrollToError() {
            const errorElement = document.querySelector('.error');
            if (errorElement) {
                errorElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    
        function validateStep1() {
            const nameInput = document.querySelector('[name="name"]');
            const emailInput = document.querySelector('[name="email"]');
            const passwordInput = document.querySelector('[name="password"]');
            const passwordConfirmationInput = document.querySelector('[name="password_confirmation"]');
            const ageInput = document.querySelector('[name="age"]');
            const addressInput = document.querySelector('[name="address"]');
            const roleInput = document.querySelector('[name="role_id"]');
    
            const inputs = [nameInput, emailInput, passwordInput, passwordConfirmationInput, ageInput, addressInput, roleInput];
            const emptyInputs = inputs.filter(input => !input.value.trim());
    
            if (emptyInputs.length > 0) {
                emptyInputs.forEach(input => {
                    const inputName = input.getAttribute('name');
                    const errorMessage = `Veuillez remplir le champ ${inputName}.`;
                    const errorElement = document.createElement('div');
                    errorElement.className = 'error';
                    errorElement.classList.add('text-red-600')
                    errorElement.classList.add('text-sm')
                    errorElement.textContent = errorMessage;
    
                    const errorContainer = input.parentNode;
                    errorContainer.appendChild(errorElement);
                });
    
                scrollToError();
            } else {
                const step1 = document.getElementById('step1');
                const step2 = document.getElementById('step2');
                step1.style.display = 'none';
                step2.style.display = 'block';
            }
        }
    
        function validateStep2() {
            const categoryInput = document.querySelector('[name="categorie"]');
            const cvInput = document.querySelector('[name="CV"]');
            const resumeInput = document.querySelector('[name="resume"]');
            const qualificationsInput = document.querySelector('[name="teacher_qualifications"]');
    
            const inputs = [categoryInput, cvInput, resumeInput, qualificationsInput];
            const emptyInputs = inputs.filter(input => !input.value.trim());
    
            if (emptyInputs.length > 0) {
                emptyInputs.forEach(input => {
                    const inputName = input.getAttribute('name');
                    const errorMessage = `Veuillez remplir le champ ${inputName}.`;
                    const errorElement = document.createElement('div');
                    errorElement.className = 'error';
                    errorElement.textContent = errorMessage;
    
                    const errorContainer = input.parentNode;
                    errorContainer.appendChild(errorElement);
                });
    
                scrollToError();
            } else {
                const form = document.getElementById('myForm');
                form.submit();
            }
        }
    </script>
    
</form>

                
                

                
                
                
                
                
            </x-authentication-card>
        </div>
    </div>
</x-guest-layout>
