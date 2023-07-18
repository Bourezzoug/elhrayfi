<div class="flex bg-white">
    @include('Client.components.sidebar')
    <div class="w-full flex flex-col h-screen ml-56">
        @include('Client.components.header')
        <div class="mt-24 ml-16">
            <div class="md:gap-6">
    
              <div class="mt-5 md:mt-0 ">
                <form wire:submit.prevent="update" method="POST">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">

                      <div class="grid grid-cols-12 gap-6">
                        <div class="sm:col-span-2 col-span-6">
                          <div class="flex flex-row items-center ">
                              <div x-data="{photoName: null, photoPreview: null}" class="w-full">
                                  <!-- Profile Photo File Input -->
                                  <input type="file" class="hidden"
                                              wire:model="cover"
                                              x-ref="cover"
                                              x-on:change="
                                                      photoName = $refs.cover.files[0].name;
                                                      const reader = new FileReader();
                                                      reader.onload = (e) => {
                                                          photoPreview = e.target.result;
                                                      };
                                                      reader.readAsDataURL($refs.cover.files[0]);
                                              " />
                                  <div class="rounded-full  w-24 h-24 bg-gray-200" x-show="! photoPreview">
                                      @if(!empty($profile_photo_path))
  
                                      <img src="{{ $profile_photo_path->temporaryUrl() }}"
                                           class="object-cover w-full h-full rounded-full">
      
                                  @elseif(!empty($profile_photo_path_url))
                                      <img src="http://127.0.0.1:8000/storage/{{ $profile_photo_path_url  }}"
                                           class="object-cover w-full h-full rounded-full">
                                  @endif
                                  </div>
                                  <div class="w-full h-56 bg-gray-200" x-show="photoPreview" style="display: none;">
                                      <span class="block w-full h-full bg-cover bg-no-repeat bg-center"
                                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                      </span>
                                  </div>
                                  <button class="-mt-10 mr-2 p-3 rounded-full bg-emerald-500" type="button" x-on:click.prevent="$refs.cover.click()">
                                      <svg wire:target="cover" wire:loading.class="animate-bounce" class="w-4 h-4 text-white " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                          <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                      </svg>
                                  </button>
                  
                                  <x-input-error for="cover" class="mt-2" />
                              </div>
                          </div>
                      </div>
                        <div class="col-span-6 sm:col-span-5">
                          <label for="name" class="block text-sm font-medium text-gray-700">Nom d'entreprise</label>
                          <input type="text" wire:model.defer="name" id="name" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-5">
                          <label for="email" class="block text-sm font-medium text-gray-700">Address email</label>
                          <input type="text" wire:model.defer="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-6 sm:col-span-4">
                          <label for="ville" class="block text-sm font-medium text-gray-700">Ville</label>
                          <select wire:model.defer="ville" id="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="" readonly="true" hidden="true"
                            selected>Choisir votre ville</option>
                            @foreach ($cities as $ville)
                            <option value="{{ $ville['ville'] }}">{{ $ville['ville'] }}</option>
                            @endforeach
                        </select>
                        </div>
          
                        <div class="col-span-8">
                          <label for="addresse" class="block text-sm font-medium text-gray-700">Addresse</label>
                          <input type="text" wire:model.defer="addresse" id="addresse" autocomplete="addresse" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-4">
                          <label for="client_responsable_name" class="block text-sm font-medium text-gray-700">Responsable</label>
                          <input type="text" wire:model.defer="client_responsable_name" id="client_responsable_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-4">
                          <label for="date_creation" class="block text-sm font-medium text-gray-700">Date de création</label>
                          <input type="date" wire:model.defer="date_creation" id="date_creation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-4">
                          <label for="client_website" class="block text-sm font-medium text-gray-700">Site web</label>
                          <input type="text" wire:model.defer="client_website" id="client_website" autocomplete="client_website" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-12">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea wire:model.defer="description" class="h-32 w-full rounded border-gray-300 px-2 py-2 text-[14px] shadow-sm mt-2" id="" ></textarea>
                        </div>
                        <div class="col-span-12">
                          <label for="description" class="block text-sm font-medium text-gray-700">Photo de couverture</label>

                          <div class="flex flex-row items-center justify-center">

                          <div x-data="{photoName: null, photoPreview: null}" class="w-full">
                              <!-- Profile Photo File Input -->
                              <input type="file" class="hidden"
                                          wire:model="cover"
                                          x-ref="cover"
                                          x-on:change="
                                                  photoName = $refs.cover.files[0].name;
                                                  const reader = new FileReader();
                                                  reader.onload = (e) => {
                                                      photoPreview = e.target.result;
                                                  };
                                                  reader.readAsDataURL($refs.cover.files[0]);
                                          " />
                              <div class="w-full  h-56 bg-gray-200" x-show="! photoPreview">
                                  @if(!empty($cover))

                                  <img src="{{ $cover->temporaryUrl() }}"
                                       class="object-cover w-full h-full">
  
                              @elseif(!empty($cover_path))
                                  <img src="http://127.0.0.1:8000/storage/{{ $cover_path  }}"
                                       class="object-cover w-full h-full">
                              @endif
                              </div>
                              <div class="w-full h-56 bg-gray-200" x-show="photoPreview" style="display: none;">
                                  <span class="block w-full h-full bg-cover bg-no-repeat bg-center"
                                        x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                  </span>
                              </div>
                              <button class="-mt-10 mr-2 p-3 rounded-full bg-emerald-500" type="button" x-on:click.prevent="$refs.cover.click()">
                                  <svg wire:target="cover" wire:loading.class="animate-bounce" class="w-4 h-4 text-white " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                      <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                      <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                  </svg>
                              </button>
              
                              <x-input-error for="cover" class="mt-2" />
                          </div>
                          </div>
                      </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" wire:loading.attr="disabled" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>