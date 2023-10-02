<div class="flex bg-white">
    @include('artisan.components.sidebar')
    <div class="w-full flex flex-col h-screen md:ml-56">
        @include('artisan.components.header')
        <div class="mt-24 md:ml-16">
            <div class="md:gap-6">
    
              <div class="mt-5 md:mt-0 ">
                <form wire:submit.prevent="update" method="POST" enctype="multipart/form-data">
                  <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">

                      <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                              <span class="font-medium">
                                Alerte info !</span> Vous devez rendre le statut de votre profil visible pour le rendre accessible.
                            </div>
                          </div>
                        <div class="sm:col-span-2 col-span-6">
                            <div class="flex flex-row items-center ">
                                <div x-data="{photoName: null, photoPreview: null}" class="w-full">
                                    <!-- Profile Photo File Input -->
                                    <input type="file" class="hidden"
                                                wire:model="profile_photo_path"
                                                x-ref="profile_photo_path"
                                                x-on:change="
                                                        photoName = $refs.profile_photo_path.files[0].name;
                                                        const reader = new FileReader();
                                                        reader.onload = (e) => {
                                                            photoPreview = e.target.result;
                                                        };
                                                        reader.readAsDataURL($refs.profile_photo_path.files[0]);
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
                                        <svg wire:target="profile_photo_path" wire:loading.class="animate-bounce" class="w-4 h-4 text-white " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                        </svg>
                                    </button>
                    
                                    <x-input-error for="profile_photo_path" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-5">
                          <label for="name" class="block text-sm font-medium text-gray-700">Nom Complet</label>
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
                          <label for="catégorie" class="block text-sm font-medium text-gray-700">Catégorie</label>
                          <x-select wire:model.defer="artisan_job_category" class=" block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                            <option value="" readonly="true" hidden="true"
                            selected>Catégorie que vous cherchez</option>
                            <option value="Plombier">Plombier</option>
                            <option value="Electricien">Electricien</option>
                            <option value="Jardinier">Jardinier</option>
                            <option value="Mécanicien">Mécanicien</option>
                            <option value="Menuisier">Menuisier</option>
                            <option value="Peintre">Peintre</option>
                            <option value="Constructeur">Constructeur</option>
                            <option value="Forgeron">Forgeron</option>
                        </x-select>
                        </div>
          
                        <div class="col-span-4">
                          <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                          <input type="date" wire:model.defer="age" id="age" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
          
                        <div class="col-span-4">
                          <label for="artisan_experience" class="block text-sm font-medium text-gray-700">Expérience</label>
                          <x-select wire:model.defer="artisan_experience" class=" block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                            <option value="" readonly="true" hidden="true"
                            selected>Années d'éxperiences</option>
                            <option value="Moins d'une 1 an">moins d'une 1 an</option>
                            <option value="Entre 1 et 3 ans">Entre 1 et 3 ans</option>
                            <option value="Plus de 3 ans">Plus de 3 ans</option>
                        </x-select>
                        </div>

                        <div class="col-span-12">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea wire:model.defer="description" class="h-32 w-full rounded border-gray-300 px-2 py-2 text-[14px] shadow-sm mt-2" id="" ></textarea>
                        </div>

                        <div class="col-span-12">
                            <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Mon CV</label>
                            <input wire:model.defer="artisan_cv" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none   p-2" id="file_input" type="file">   

                                @if ($artisan_cv_name)
                                    <p>{{ basename($artisan_cv_name) }}</p>
                                @endif

                            
                        </div>
                        {{-- <div class="col-span-12">
                            <label for="portfolio" class="block text-sm font-medium text-gray-700">Portfolio</label>

                                                    <!-- component -->
                            <div class="bg-white p7 rounded w-full">
                            <div x-data="dataFileDnD()" class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded">
                                <div x-ref="dnd"
                                    class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
                                    <input accept="*" type="file" wire:model.defer="artisan_portfolio" multiple
                                        class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                                        @change="addFiles($event)"
                                        @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                                        @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                        @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                        title="" />
                            
                                    <div class="flex flex-col items-center justify-center py-10 text-center">
                                        <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <p class="m-0">Drag your files here or click in this area.</p>
                                    </div>
                                </div>
                            
                                <template x-if="files.length > 0">
                                    <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
                                        @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                                        <template x-for="(_, index) in Array.from({ length: files.length })">
                                            <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                                style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                                                :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                                                <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                                                    <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                                <template x-if="files[index].type.includes('audio/')">
                                                    <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                                    </svg>
                                                </template>
                                                <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                                                    <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                    </svg>
                                                </template>
                                                <template x-if="files[index].type.includes('image/')">
                                                    <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                                        x-bind:src="loadFile(files[index])" />
                                                </template>
                                                

                            
                                                <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                                    <span class="w-full font-bold text-gray-900 truncate"
                                                        x-text="files[index].name">Loading</span>
                                                    <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                                                </div>
                            
                                                <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                                                    @dragleave="fileDropping = null"
                                                    :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                            </div>
                            </div>
                            
                            <script src="https://unpkg.com/create-file-list"></script>
                            
                            <script>
                            function dataFileDnD() {
                                return {
                                    files: [],
                                    fileDragging: null,
                                    fileDropping: null,
                                    humanFileSize(size) {
                                        const i = Math.floor(Math.log(size) / Math.log(1024));
                                        return (
                                            (size / Math.pow(1024, i)).toFixed(2) * 1 +
                                            " " +
                                            ["B", "kB", "MB", "GB", "TB"][i]
                                        );
                                    },
                                    remove(index) {
                                        let files = [...this.files];
                                        files.splice(index, 1);
                            
                                        this.files = createFileList(files);
                                    },
                                    drop(e) {
                                        let removed, add;
                                        let files = [...this.files];
                            
                                        removed = files.splice(this.fileDragging, 1);
                                        files.splice(this.fileDropping, 0, ...removed);
                            
                                        this.files = createFileList(files);
                            
                                        this.fileDropping = null;
                                        this.fileDragging = null;
                                    },
                                    dragenter(e) {
                                        let targetElem = e.target.closest("[draggable]");
                            
                                        this.fileDropping = targetElem.getAttribute("data-index");
                                    },
                                    dragstart(e) {
                                        this.fileDragging = e.target
                                            .closest("[draggable]")
                                            .getAttribute("data-index");
                                        e.dataTransfer.effectAllowed = "move";
                                    },
                                    loadFile(file) {
                                        const preview = document.querySelectorAll(".preview");
                                        const blobUrl = URL.createObjectURL(file);
                            
                                        preview.forEach(elem => {
                                            elem.onload = () => {
                                                URL.revokeObjectURL(elem.src); // free memory
                                            };
                                        });
                            
                                        return blobUrl;
                                    },
                                    addFiles(e) {
                                        const files = createFileList([...this.files], [...e.target.files]);
                                        this.files = files;
                                        this.form.formData.files = [...files];
                                    }
                                };
                            }
                            </script>
                        </div> --}}

                        <div class="col-span-12 ">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="default_size">Portfolio</label>
                            <input class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 p-2" id="default_size" type="file" wire:model.defer="artisan_portfolio" multiple>
                        </div> 
                        <div class="col-span-12">
                            @if (!empty($artisan_portfolio_images) && is_string($artisan_portfolio_images))
                                <div class="grid grid-cols-12 gap-5">
                                    @forelse (explode(',', $artisan_portfolio_images) as $image)
                                        <div class="col-span-4 relative">
                                            <img src="http://127.0.0.1:8000/storage/{{ $image }}" class="h-40 w-full object-cover" alt="">
                                            <x-svg.svg-close
                                                class="w-10 h-10 p-1 transform hover:text-emerald-500 transition-all cursor-pointer absolute top-0 right-0 bg-white"
                                                wire:click="deleteImage('{{ $image }}')"
                                            />
                                        </div>
                                    @empty
                                        <!-- Handle the case when no images are available -->
                                    @endforelse
                                </div>
                            @endif
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
                        <div class="col-span-12">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <x-checkbox wire:model.defer="status" id="status" type="text" class="sr-only peer" />
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Status</span>
                            </label>
                            <x-input-error for="status" class="mt-2"/>
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" wire:loading.attr="disabled" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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