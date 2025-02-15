<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;
use App\Models\Subscriber;

class SubscribersComponent extends Component
{
    public $email;
    public function rules(){
        return [
            'email' => 'required|email|unique:subscribers,email'
        ];
    }
    public function submit(){
        $this->validate();
        Subscriber::create([
            'email' => $this->email
        ]);
        $this->reset('email');
        session()->flash('success', 'You have been subscribed successfully');
        $this->email = '';
    }
   
    public function render()
    {
        return view('front.components.subscribers-component');
    }
}
