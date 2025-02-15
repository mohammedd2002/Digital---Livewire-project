<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesCreate extends Component
{

    public $name , $description , $icon;

  
    public function rules(){
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ];
    }

    public function submit(){
        $data = $this->validate();
        Service::create($data);
        $this->reset();
        $this->dispatch('close-modal');
        $this->dispatch('refresh-services')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-create');
    }
}
