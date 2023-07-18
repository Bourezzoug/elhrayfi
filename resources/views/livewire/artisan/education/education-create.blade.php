<form wire:submit.prevent="create" class="text-left">
    <div class="flex bg-white">
        @include('artisan.components.sidebar')
        <div class="w-full flex flex-col h-screen ml-80 mt-32">
            @include('artisan.components.header')
            <div class="w-[900px] border-b border-gray-900/10 pb-12 col-span-12">
                <label for="description" class="block text-sm font-medium text-gray-700">Education</label>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-12 experience-section">
                {{-- <div class="experience-section "> --}}
                    <div class="sm:col-span-4">
                    <label for="date_debut" class="block text-sm font-medium leading-6 text-gray-900">Date Début</label>
                    <div>
                        @php
                            $years = range(1900, strftime("%Y", time()));
                        @endphp
                            <x-select wire:model.defer="date_debut" class="block w-full mt-1 h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                <option>Select Year</option>
                                @foreach($years as $year) 
                                <option value=" {{ $year }}">  {{ $year }}</option>
                                @endforeach
                            </x-select>                                  
                        </div>
                    </div>
            
                    <div class="sm:col-span-4">
                    <label for="date_fin" class="block text-sm font-medium leading-6 text-gray-900">Date Fin</label>
                    {{-- <div class="mt-2">
                        <input type="date" wire:model.defer="date_fin[]" id="date_fin" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div> --}}
                    <x-select wire:model.defer="date_fin" class="block w-full mt-1 h-[2.5rem] rounded px-2 py-2 text-[14px]">
                        <option>Select Year</option>
                        @foreach($years as $year) 
                        <option value=" {{ $year }}">  {{ $year }}</option>
                        @endforeach
                    </x-select>  
                    </div>
            
                    <div class="sm:col-span-4">
                    <label for="diplome" class="block text-sm font-medium leading-6 text-gray-900">Diplome ou Certification</label>
                    <div class="mt-2">
                        <input type="text" wire:model.defer="diplome" id="diplome" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    </div>
            
                    <div class="sm:col-span-6">
                    <label for="school_name" class="block text-sm font-medium leading-6 text-gray-900">Nom d'Ecole</label>
                    <div class="mt-2">
                        <input type="text" wire:model.defer="school_name" id="school_name" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    </div>
            
                    <div class="sm:col-span-6">
                    <label for="school_city" class="block text-sm font-medium leading-6 text-gray-900">Ville</label>
                    <x-select wire:model.defer="school_city" id="school_city" class="block w-full mt-1 h-[2.5rem] rounded px-2 py-2 text-[14px]">
                        <option value="" readonly="true" hidden="true" selected>Choisir votre ville</option>
                        @foreach ($cities as $ville)
                        <option value="{{ $ville['ville'] }}">{{ $ville['ville'] }}</option>
                        @endforeach
                    </x-select>
                    </div>
            
                {{-- </div> --}}
            
                    <div class="col-span-12">
                        <x-button type="submit"  wire:loading.attr="disabled" class="bg-gray-600 hover:bg-gray-800">
                            {{ __('Save') }}
                        </x-button>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    </form>