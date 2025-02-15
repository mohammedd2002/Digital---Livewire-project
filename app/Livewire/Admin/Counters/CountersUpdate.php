<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    public  $counter ,$count , $name, $icon; 
    protected $listeners = ['counterUpdate'];

    public function counterUpdate($id){
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;
        $this->resetValidation();
        $this->dispatch('editToggleModal');
    }

    public function rules(){
        return [
            'name' => 'required|string|max:255',
            'count' => 'required|integer',
            'icon' => 'required|string|max:255',
        ];
    }

    public function submit(){
        $data = $this->validate();
        $this->counter->update($data);
        $this->dispatch('editToggleModal');
        $this->dispatch('refresh-counters')->to(countersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-update');
    }
}
