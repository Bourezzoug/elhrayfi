<?php

namespace App\Http\Livewire\Client\Message;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MessagdeIndex extends Component
{
    public $selectedContact,$message;

    protected $listeners = ['refreshParent' => '$refresh', 'newMessage' => 'refreshConversations'];

    public function create() {
        $receiverId = $this->selectedContact;
        
        $data = [
            'sender_id'     =>  Auth::user()->id,
            'receiver_id'   =>  $receiverId,
            'message'       =>  $this->message,
            'seen'          =>  false, // Mark the message as unread initially
        ];

        Message::create($data);

        $this->emit('newMessage');

        $this->emit('refreshParent');
        $this->message = '';
        return redirect()->back();
    }
    public function getListeners()
    {
        return [
            'refreshPoll' => '$refresh',
        ];
    }

    public function refreshComponent()
    {
        $this->emit('refreshPoll');
    }
    public function refreshConversations()
    {
        $this->emit('$refresh');
    }

    public function selectConversationAndMarkAsSeen($contactId)
    {
        // Mark the messages as seen
        $user_id = Auth::user()->id;
        Message::where(function ($query) use ($user_id, $contactId) {
            $query->where('sender_id', $user_id)->where('receiver_id', $contactId);
        })->orWhere(function ($query) use ($user_id, $contactId) {
            $query->where('sender_id', $contactId)->where('receiver_id', $user_id);
        })->update(['seen' => true]);
        
        // Emit an event to update the conversations list
        $this->emit('refreshParent');

        // Set the selectedContact
        $this->selectedContact = $contactId;
    }

    public function render()
    {
        $user_id = Auth::user()->id;
        $messages = Message::where('receiver_id', $user_id)
            ->orWhere('sender_id', $user_id)
            ->with(['sender', 'receiver'])
            // ->orderBy('created_at', 'asc')
            ->get()
            ->groupBy(function ($message) use ($user_id) {
                return $message->sender_id == $user_id ? $message->receiver_id : $message->sender_id;
            });
            $formattedMessages = [];
            foreach ($messages as $contactId => $conversation) {
                $contactUser = $conversation->first()->sender_id == Auth::user()->id
                    ? $conversation->first()->receiver
                    : $conversation->first()->sender;
    
                $unreadCount = $conversation->where('receiver_id', $user_id)->where('seen', false)->count();
                $formattedMessages[] = [
                    'contactId' => $contactId,
                    'contactUser' => $contactUser,
                    'unreadCount' => $unreadCount,
                ];
            }
        return view('livewire.client.message.messagde-index',[
            'messages'          =>  $messages,
            'formattedMessages'  =>  $formattedMessages
        ]);
    }
}
