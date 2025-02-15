<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersCreate extends Component
{

    public $name;
    public $count;
    public $icon;

  
    public function rules(){
        return [
            'name' => 'required|string|max:255',
            'count' => 'required|string',
            'icon' => 'required|string|max:255',
        ];
    }

    public function submit(){
        $data = $this->validate();
        Counter::create($data);
        $this->reset();
        $this->dispatch('close-modal');
        $this->dispatch('refresh-counters')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-create');
    }
}
