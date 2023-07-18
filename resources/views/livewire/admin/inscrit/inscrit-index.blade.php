<div class="flex bg-white">
    @include('admin.components.sidebar')
    <div class="w-full flex flex-col h-screen ml-56">
        @include('admin.components.header')
        <div class="ml-8 mt-20" wire:init="loadItems">

            <!-- component -->
            <div class="m-5">
                


                <x-button wire:click.prevent="deleteSelected" onclick="confirm('Vous êtes sure?') || event.stopImmediatePropagation()"
                class="text-white rounded-lg " id="deleteButton">
                <x-svg.svg-delete class="w-5 h-5"/>
                    {{ __('Supprimer') }}
                </x-button>

                </div>
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                <div class="flex items-center px-2 py-4">
            
                <div class="col-span-3 md:col-span-2 lg:col-span-1 mr-3">
                    <label class="text-xs" for="select" value="{{ __('Afficher par page') }}"/>
                    <x-select wire:model="perPage" class="mt-1">
                    <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </x-select>
                </div>
            
                <div class="col-span-3 md:col-span-2 lg:col-span-1 mr-3">
                    <label class="text-xs" for="select" value="{{ __('SortBy') }}"/>
                    <x-select wire:model="sortBy" class="mt-1">
                        <option value="asc">{{ __('ASC') }}</option>
                        <option value="desc">{{ __('DESC') }}</option>
                    </x-select>
                </div>

            
                <div class="col-span-3 md:col-span-2 lg:col-span-2 mr-3">
                    <label class="text-xs" for="search" value="{{ __('Chercher') }}">
                    <input wire:model="term" id="search" type="text" class="w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75  pr-10"
                                autocomplete="off"/>
                </div>
                <div class="col-span-3 md:col-span-2 lg:col-span-2">
                    <x-button wire:click="ExportCSV" class="bg-green-700 hover:bg-green-800 focus:bg-green-800  active:bg-green-800 rounded-lg">Export CSV File</x-button>
                </div>
            
                </div>
                <div class="overflow-x-auto w-full">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                            <input type="checkbox" class="bg-neutral-50 border-neutral-200 mr-3" wire:model="selecteAll">
                        </th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Date de création</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            
            
                    @forelse ($inscrits as $inscrit)

            
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <input type="checkbox" wire:model="selectedPosts" value="{{ $inscrit->id }}" class="bg-neutral-50 border-neutral-200 childCheckbox">
                        </td>


                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                            <span
                                class="inline-flex items-center gap-1 w-fit rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-gray-600"
                            >
                            {{ $inscrit->email }} 
                            </span>
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                            <span
                                class="inline-flex items-center gap-1 w-fit rounded-full bg-gray-50 px-2 py-1 text-xs font-semibold text-gray-600"
                            >
                            {{ date('jS M Y',strtotime($inscrit->created_at)) }} 
                            </span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
            
                            <div class="flex gap-4">

                                <div class="cursor-pointer" wire:click="selectedItem('delete',{{ $inscrit->id }})"
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

<livewire:admin.inscrit.inscrit-delete />



