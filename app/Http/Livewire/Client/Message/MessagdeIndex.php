<?php

namespace App\Http\Livewire\Client\Message;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MessagdeIndex extends Component
{
    public $selectedContact,$message;

    public function create() {
        $receiverId = $this->selectedContact;
        
        $data = [
            'sender_id'     =>  Auth::user()->id,
            'receiver_id'   =>  $receiverId,
            'message'       =>  $this->message,
        ];

        Message::create($data);

        $this->emit('refreshParent');
        $this->message = '';
        return redirect()->back();
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
        return view('livewire.client.message.messagde-index',[
            'messages'   =>  $messages
        ]);
    }
}
