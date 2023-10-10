<div class="flex bg-white">
    @include('Client.components.sidebar')
    <div class="w-full flex flex-col h-screen ml-56">
        @include('Client.components.header')
        <section class="relative bg-slate-50 lg:py-24 py-16">
            <div class="container mx-auto p-6">
                <div class="lg:flex justify-center">
                    <div class="lg:w-2/3">
                        <div class="p-6 bg-white shadow rounded-md">
                            <form wire:submit.prevent="edit" class="text-left">
                                <div class="grid grid-cols-1">
                                    <h5 class="text-lg font-semibold">Job Details:</h5>
                                </div>

                                <div class="grid grid-cols-12 gap-4 mt-4">
                                    <div class="col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold" for="RegisterName">Titre du poste<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                        <x-input id="RegisterName" wire:model.defer="title" type="text" class=" block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]" placeholder="Titre du poste" />
                                    </div>


                                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-12">
                                        <label class="font-semibold" for="RegisterName">Image d'offre<span class="text-red-600 inline-block ml-1">*</span> :</label>

                                          <!-- Profile Photo File Input -->
                                          <input type="file" class="hidden"
                                                      wire:model="image"
                                                      x-ref="image"
                                                      x-on:change="
                                                              photoName = $refs.image.files[0].name;
                                                              const reader = new FileReader();
                                                              reader.onload = (e) => {
                                                                  photoPreview = e.target.result;
                                                              };
                                                              reader.readAsDataURL($refs.image.files[0]);
                                                      " />
                                          <div class="w-full  xl:h-80 bg-gray-200 " x-show="! photoPreview">
                                              @if(!empty($image))
                                              <img src="{{ $image }}" alt="{{ $image }}" class="h-full w-full object-cover">
                                              @elseif(!empty($image_path))
                                              <img src="{{ asset($image_path)  }}"
                                                   class="object-cover w-full xl:h-80 ">
                                              @endif
                                          </div>
                                          <div class="w-full xl:w-80 h-56 bg-gray-200 " x-show="photoPreview" style="display: none;">
                                              <span class="block w-full h-full bg-cover bg-no-repeat bg-center "
                                                    x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                              </span>
                                          </div>
                                          <button class="-mt-10 mr-2 p-3 rounded-full bg-indigo-500" type="button" x-on:click.prevent="$refs.image.click()">
                                              <svg wire:target="image" wire:loading.class="animate-bounce" class="w-4 h-4 text-white " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                  <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                              </svg>
                                          </button>
                          
                                          <x-input-error for="image" class="mt-2" />
                                      </div>




                                    <div class="col-span-12 ltr:text-left">
                                        <label for="description" class="font-semibold block">Description du poste<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                        <textarea wire:model.defer="description" id="description" class="h-32 w-full rounded border-gray-300 px-2 py-2 text-[14px] shadow-sm mt-2" placeholder="Description du poste"></textarea>
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



                                    <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                        <label class="font-semibold md:invisible md:block hidden">Min:</label>
                                        <div class="relative mt-1">
                                            <span class="w-10 h-10 bg-slate-50 border border-slate-100 absolute top-0 start-0 overflow-hidden rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign w-4 h-4 absolute top-3 start-3"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                            </span>
                                            <input type="number" wire:model.defer="salaire_montant" class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded pr-2 pl-12 py-2 text-[14px]" placeholder="Le salaire que vous proposez" name="minsalary">
                                        </div>
                                    </div>

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
