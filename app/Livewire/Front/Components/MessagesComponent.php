<?php

namespace App\Livewire\Front\Components;

use App\Models\Message;
use Livewire\Component;

class MessagesComponent extends Component
{
    public $name , $email , $subject , $message;
    public function rules(){
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ];
    }
    public function submit(){
        $data = $this->validate();
        Message::create($data);
        $this->reset();
        session()->flash('message' , 'Message Sent Successfully');
        
    }
    public function render()
    {
        return view('front.components.messages-component');
    }
}
