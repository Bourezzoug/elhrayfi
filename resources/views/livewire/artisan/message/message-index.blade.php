<div class="flex bg-white">
    @include('artisan.components.sidebar')
    <div class="w-full flex flex-col h-screen md:ml-56">
        @include('artisan.components.header')
        <!-- component -->
<div class="flex h-[650px] antialiased text-gray-800 ml-8 mt-14">
    <div class="flex flex-row h-full w-full overflow-x-hidden">
      <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">


        <div class="flex flex-col mt-8">
          <div class="flex flex-row items-center justify-between text-xs">
            <span class="font-bold">Active Conversations</span>
            <span
              class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full"
              >{{ $messages->count() }}</span
            >
          </div>
          <div class="flex flex-col space-y-1 mt-4 -mx-2 h-full overflow-y-auto">
            @foreach ($formattedMessages as $messageData)
            @php
                $contactId = $messageData['contactId'];
                $contactUser = $messageData['contactUser'];
                $newMessageCount = $messageData['unreadCount'];
            @endphp
            <button wire:click="selectConversationAndMarkAsSeen({{ $contactId }})" class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                <div class="flex items-center justify-center h-8 w-8  rounded-full bg-cover" style="background-image: url('http://127.0.0.1:8000/storage/{{ $contactUser->profile_photo_path }}')">
                </div>
                <div class="ml-2 text-sm font-semibold">{{ $contactUser->name }}</div>
                {{-- Display the new message count here --}}
                @if ($newMessageCount > 0)
                    <span class="ml-2 bg-red-500 text-white text-xs py-[4px] px-[8px] rounded-full">{{ $newMessageCount }}</span>
                @endif
            </button>
        @endforeach
        
          </div>

        </div>
      </div>
      <div class="flex flex-col flex-auto h-full p-6">
        <div
          class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4"
        >
          <div class="flex flex-col h-full overflow-x-auto mb-4">
            <div class="flex flex-col h-full">
              <div class="grid grid-cols-12 gap-y-2">
                @forelse ($messages as $conversation)
                @php
                    // Determine the contact (the other user in the conversation)
                    $contact = $conversation->first()->sender_id == Auth::user()->id
                        ? $conversation->first()->receiver
                        : $conversation->first()->sender;
                @endphp


                  @empty
              
              @endforelse
            
            @if ($selectedContact)
                @forelse ($messages[$selectedContact] as $message)
                    @if ($message->receiver_id == Auth::user()->id)
                        <div class="col-start-1 col-end-8 p-3 rounded-lg">
                            <div class="flex flex-row items-center">
                                <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0 bg-cover" style="background-image: url('http://127.0.0.1:8000/storage/{{ $message->sender->profile_photo_path }}')">
                                </div>
                                <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                    <div>{{ $message->message }}</div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-start-6 col-end-13 p-3 rounded-lg">
                            <div class="flex items-center justify-start flex-row-reverse">
                                <div class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                    <div>{{ $message->message }}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <!-- Display a message when there are no messages with the selected contact -->
                    <div class="col-start-1 col-end-8 p-3 rounded-lg">
                        <div class="text-sm bg-white py-2 px-4 shadow rounded-xl">
                            No messages with this contact yet.
                        </div>
                    </div>
                @endforelse
                <script>
                  // Start polling for updates every 3 seconds (adjust the interval as needed)
                  setInterval(function () {
                      @this.call('refreshComponent');
                  }, 1000);
              </script>
            @endif

            
            
              </div>
            </div>
          </div>
          <form wire:submit.prevent="create" class="text-left">
          <div
            class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4"
          >

            
            <div class="flex-grow ml-4">
              <div class="relative w-full">
                <input wire:model.defer="message" type="text" class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />

              </div>
            </div>
            <div class="ml-4">
              <button type="submit" wire:loading.attr="disabled" id="submit" name="send" class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0">
                <span>Send</span>
                <span class="ml-2">
                  <svg class="w-4 h-4 transform rotate-45 -mt-px" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                  </svg>
                </span>
              </button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>