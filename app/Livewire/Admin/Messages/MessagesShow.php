<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesShow extends Component
{

    
    public $name , $message , $email;
    protected $listeners = ['messageShow'];
    public function messageShow($id){
        $data = Message::find($id);
        $this->name = $data->name;
        $this->message = $data->message;
        $this->email = $data->email;
        $this->dispatch('showToggleModal');
        $data->update(['status' => 'read']);
        $this->dispatch('refresh-messages')->to(MessagesData::class);
    }

    public function render()
    {
        return view('admin.messages.messages-show');
    }
}
