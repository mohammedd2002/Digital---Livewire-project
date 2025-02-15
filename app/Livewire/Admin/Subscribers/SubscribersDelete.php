<?php

namespace App\Livewire\Admin\Subscribers;

use Livewire\Component;
use App\Models\Subscriber;

class SubscribersDelete extends Component
{

    public $subscriber;
    protected $listeners = ['subscriberDelete'];
    public function subscriberDelete($id){
       $this->subscriber = Subscriber::find($id);
        $this->dispatch('deleteToggleModal');
    }

    public function submit(){
        $this->subscriber->delete();
        $this->reset('subscriber'); //reset the subscriber property
        $this->dispatch('deleteToggleModal');
        $this->dispatch('refresh-subscribers')->to(SubscribersData::class);
    }

    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
