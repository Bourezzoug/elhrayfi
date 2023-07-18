<div class="ml-20">
    <x-dialog-modal wire:model="showUpdateModel" maxWidth='5xl'>

        <x-slot name="title">
            {{ __('Modifier cet Article') }} 
        </x-slot>

        <form wire:submit.prevent="edit" autocomplete="off">

        <x-slot name="content">
            <div class="grid grid-cols-6 gap-3">
                <div class="col-span-3">
                    <label for="titre" class="block text-sm font-medium leading-6 text-gray-900">Titre du poste</label>
                    <div class="mt-2">
                        <input type="text" wire:model.defer="titre" id="titre" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-3">
                    <label for="company_name" class="block text-sm font-medium leading-6 text-gray-900">Nom d'Entreprise</label>
                    <div class="mt-2">
                        <input type="text" wire:model.defer="company_name" id="company_name" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="date_debut" class="block text-sm font-medium leading-6 text-gray-900">Date Début</label>
                    <div>
                        @php
                            $years = range(1900, strftime("%Y", time()));
                        @endphp
                            <x-select wire:model.defer="date_debut" class="block w-full mt-1 h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                <option>Select Year</option>
                                @foreach($years as $year) 
                                <option value="{{ $year }}" @if($year == $date_debut) selected @endif>{{ $year }}</option>
                                @endforeach
                            </x-select>                                  
                        </div>
                </div>
                <div class="col-span-2">
                    <label for="date_fin" class="block text-sm font-medium leading-6 text-gray-900">Date Fin</label>
                    <div>
                            <x-select wire:model.defer="date_fin" class="block w-full mt-1 h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                <option>Select Year</option>
                                @foreach($years as $year) 
                                <option value="{{ $year }}" @if($year == $date_fin) selected @endif>{{ $year }}</option>
                                @endforeach
                            </x-select>                                  
                        </div>
                </div>

                <div class="col-span-2">
                    <label for="company_city" class="block text-sm font-medium leading-6 text-gray-900">Ville</label>
                    <x-select wire:model.defer="company_city" id="company_city" class="block w-full mt-1 h-[2.5rem] rounded px-2 py-2 text-[14px]">
                        <option value="" readonly="true" hidden="true" selected>Choisir votre ville</option>
                        @foreach ($cities as $ville)
                        <option value="{{ $ville['ville'] }}">{{ $ville['ville'] }}</option>
                        @endforeach
                    </x-select>
                </div>
                <div class="col-span-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description du poste</label>
                    <textarea wire:model.defer="description" id="description" class="h-32 w-full rounded border-gray-300 px-2 py-2 text-[14px] shadow-sm mt-2"></textarea>
                </div>
            </div>
        </x-slot>
            <x-slot name="footer">
            <x-secondary-button wire:click="closeUpdateModel" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
            <x-button type="submit" wire:click="edit" wire:loading.attr="disabled" class="ml-3 bg-gray-600 hover:bg-gray-800">
                {{ __('Save') }}
            </x-button>
        </x-slot>
        </form>

    </x-dialog-modal>
</div>