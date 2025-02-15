<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesData extends Component
{
    use WithPagination;
    
    public $search;
    protected $listeners = ['refresh-messages' => '$refresh'];
    
    

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        return view('admin.messages.messages-data' , [
            'messages' => Message::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
  
}
