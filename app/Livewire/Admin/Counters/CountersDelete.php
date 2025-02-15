<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counter;
    protected $listeners = ['counterDelete'];
    public function counterDelete($id){
       $this->counter = Counter::find($id);
        $this->dispatch('deleteToggleModal');
    }

    public function submit(){
        $this->counter->delete();
        $this->reset('counter'); //reset the counter property
        $this->dispatch('deleteToggleModal');
        $this->dispatch('refresh-counters')->to(countersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
