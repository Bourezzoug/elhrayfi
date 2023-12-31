<div class="flex bg-white">
    @include('Client.components.sidebar')
    <div class="w-full flex flex-col h-screen ml-56">
        @include('Client.components.header')
        <section class="relative bg-slate-50 lg:py-24 py-16">
            <div class="container mx-auto p-6">
                <div class="lg:flex justify-center">
                    <div class="lg:w-2/3">
                        <div class="p-6 bg-white shadow rounded-md">
                            <form wire:submit.prevent="create" class="text-left">
                                <div class="grid grid-cols-1">
                                    <h5 class="text-lg font-semibold">Job Details:</h5>
                                </div>

                                <div class="grid grid-cols-12 gap-4 mt-4">
                                    <div class="col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold" for="RegisterName">Titre d'offre<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                        <x-input id="RegisterName" wire:model.defer="title" type="text" class=" block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]" placeholder="Titre du poste" />
                                    </div>
                                    <div  x-data="{photoName: null, photoPreview: null}" class="w-full col-span-12">
                                        <label class="font-semibold" for="RegisterName">Image d'offre<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                        {{-- <div class="py-5 mr-5 pl-3"> --}}
                                                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                                    <!--Profile Photo File Input -->
                                                    <input type="file" class="hidden input-field"
                                                                wire:model="image_offre"
                                                                
                                                                x-ref="image_offre"
                                                                x-on:change="
                                                                        photoName = $refs.image_offre.files[0].name;
                                                                        const reader = new FileReader();
                                                                        reader.onload = (e) => {
                                                                            photoPreview = e.target.result;
                                                                        };
                                                                        reader.readAsDataURL($refs.image_offre.files[0]);
                                                                " />
                                
                                
                                                <!--Current Profile Photo -->
                                                <div class="mt-2 w-full  xl:h-80 bg-gray-100" x-show="! photoPreview">
                                                    {{-- <img src="{{ $photo }}" alt="{{ $photo }}" class="h-full w-full object-cover"> --}}
                                                </div>
                                
                                                <!--New Profile Photo Preview -->
                                                <div class="mt-2 w-full xl:h-80" x-show="photoPreview" style="display: none;">
                                                    <span class="block w-full h-full bg-cover bg-no-repeat bg-center"
                                                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                                    </span>
                                                </div>

                                                <x-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.image_offre.click()">
                                                    {{ __('Select A New Photo') }}
                                                </x-secondary-button>
                                
                                
                                                <x-input-error for="photo" class="mt-2 input-error" />
                                            </div>
                                      {{-- </div> --}}
                                    </div>
                                    <div class="col-span-12 ltr:text-left">
                                        <label for="description" class="font-semibold block">Description d'offre<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                        <div class="">
                                            <div wire:ignore>
                                              <div class="form-control" wire:model.defer="description" id="summary-ckeditor-2"></div>
                                          </div>
                                          
                                              <script>
                                                  document.addEventListener('livewire:load', function () {
                                                      initEditor();
                                          
                                                      window.livewire.on('render', function () {
                                                          initEditor();
                                                      });
                                                  });
                                          
                                                  function initEditor() {
                                                    tinymce.init({
                                                        selector: '#summary-ckeditor-2',
                                                        plugins: 'lists link image charmap print preview hr anchor pagebreak',
                                                        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                                                        height: 300,
                                                        setup: function (editor) {
                                                            editor.on('change', function () {
                                                                window.livewire.emit('bodyUpdated', editor.getContent());
                                                            });

                                                        },
                                                        paste_data_images: true,
                                                        // auto_focus: true
                                                    });
                                                }
        
                                              </script>
                                    </div>
                                    </div>

                                    <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold">Categorie<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                        <x-select wire:model.defer="catégorie" class=" block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
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
                                            <option value="Autres">Autres</option>
                                        </x-select>
                                    </div>

                                    {{-- <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold">Type du travail<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                        <x-select wire:model.defer="type_travail"  class="block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                            <option value="" readonly="true" hidden="true"
                                            selected>Type du travail</option>
                                            <option value="Plein">Temps Plein</option>
                                            <option value="Partiel">Temps partiel</option>
                                        </x-select>
                                    </div> --}}


                                    {{-- <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold">Type du paiment:</label>
                                        <x-select wire:model.defer="salaire_type" class="block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                            <option value="" readonly="true" hidden="true"
                                            selected>Type du paiment:</option>
                                            <option value="par heure">Par Heure</option>
                                            <option value="par semaine">Par Semaine</option>
                                            <option value="par mois">Par Mois</option>
                                            <option value="prix fixe">Prix fixe</option>
                                        </x-select>
                                    </div> --}}

                                    <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold md:invisible md:block hidden">Min:</label>
                                        <div class="relative mt-1">
                                            <span class="w-10 h-10 bg-slate-50 border border-slate-100 absolute top-0 start-0 overflow-hidden rounded flex justify-center items-center text-xs">
                                                DHS
                                            </span>
                                            <input type="number" wire:model.defer="salaire_montant" class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded pr-2 pl-12 py-2 text-[14px]" placeholder="Le salaire que vous proposez" name="minsalary">
                                        </div>
                                    </div>
                                    {{-- <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold">Durée:<span class="text-red-600 inline-block ml-1">*</span> </label>
                                        <x-select wire:model.defer="travail_periode" class="block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                            <option value="" readonly="true" hidden="true"
                                            selected>Durée:</option>
                                            <option value="moins d'un mois">moins d'un mois</option>
                                            <option value="Entre 1 et 3 mois">Entre 1 et 3 mois</option>
                                            <option value="3 mois ou plus">3 mois ou plus</option>
                                        </x-select>
                                    </div> --}}

                                </div>
                                




                                <div class="grid grid-cols-12 gap-4 mt-4">
                                    <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold">Ville<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                        <x-select wire:model.defer="ville" id="" class="block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                            <option value="" readonly="true" hidden="true"
                                            selected>Choisir votre ville</option>
                                            @foreach ($cities as $ville)
                                            <option value="{{ $ville['ville'] }}">{{ $ville['ville'] }}</option>
                                            @endforeach
                                        </x-select>
                                    </div>

                                    <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold">Address<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                        <input id="address" wire:model.defer="address" type="text" class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]" placeholder="Votre address">
                                    </div>


                                    {{-- <div class="col-span-12 ltr:text-left rtl:text-right">
                                        <div class="w-full leading-[0] border-0">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[200px] rounded shadow" allowfullscreen=""></iframe>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="grid grid-cols-1 gap-4 mt-4">
                                    <div>
                                        <button type="submit" wire:loading.attr="disabled" id="submit" name="send" class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white p-2">Post Now</button>
                                    </div>
                                </div>
                            </form><!--end form-->
                        </div>
                    </div>
                </div><!--end flex-->
            </div><!--end container-->
        </section>
    </div>
</div>
