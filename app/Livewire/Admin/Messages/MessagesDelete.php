<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $message;
    protected $listeners = ['messageDelete'];
    public function messageDelete($id){
       $this->message = Message::find($id);
        $this->dispatch('deleteToggleModal');
    }

    public function submit(){
        $this->message->delete();
        $this->reset('message'); //reset the message property
        $this->dispatch('deleteToggleModal');
        $this->dispatch('refresh-messages')->to(messagesData::class);
    }
    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
