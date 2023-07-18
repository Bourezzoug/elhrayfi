<div class="flex bg-white">
    @include('artisan.components.sidebar')
    <div class="w-full flex flex-col h-screen ml-56">
        @include('artisan.components.header')
        <div class="ml-8 mt-20" wire:init="loadItems">

            <!-- component -->
            <div class="m-5">
                


                <x-button 
                class="text-white rounded-lg">
                
                <a href="{{ Route('education.create') }}" class="flex items-center">
                    <x-svg.svg-plus class="w-5 h-5"/>{{ __('Ajouter') }}</a>
                </x-button>

                </div>
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                <div class="flex items-center px-2 py-4">
            
            
                </div>
                <div class="overflow-x-auto w-full">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                            <input type="checkbox" class="bg-neutral-50 border-neutral-200 mr-3" wire:model="selecteAll">
                        </th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Diplome</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nom d'Ecole</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Ville</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Période</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            
            
                    @forelse ($educations as $education)

            
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <input type="checkbox" wire:model="selectedPosts" value="{{ $education->id }}" class="bg-neutral-50 border-neutral-200 childCheckbox">
                        </td>


                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                            <span
                                class="inline-flex items-center gap-1 w-fit rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-gray-600"
                            >
                            {{ $education->diplome }} 
                            </span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                            <span
                                class="inline-flex items-center gap-1 w-fit rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-gray-600"
                            >
                            {{ $education->school_name }} 
                            </span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                            <span
                                class="inline-flex items-center gap-1 w-fit rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-gray-600"
                            >
                            {{ $education->school_city }} 
                            </span>
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                            <span
                                class="inline-flex items-center gap-1 w-fit rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-gray-600"
                            >
                            {{ $education->date_debut }} - {{ $education->date_fin }}
                            </span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
            
                            <div class="flex gap-4">
                                <div class="cursor-pointer" wire:click="selectedItem('update',{{ $education->id }})"
                                    class="px-2">
                                    <x-svg.svg-update class="w-5 h-5 mr-2 transform hover:text-purple-500 hover:scale-110"/>
                                </div>

                                <div class="cursor-pointer" wire:click="selectedItem('delete',{{ $education->id }})"
                                        class="px-2">
                                    <x-svg.svg-delete class="w-5 h-5 mr-2 transform hover:text-purple-500 hover:scale-110"/>
                                </div>

                            </div>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
            
                </tbody>
                </table>
                </div>

                </div>
        </div>
    </div>
</div>
<livewire:artisan.education.education-update />
<livewire:artisan.education.education-delete />
