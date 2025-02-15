<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{

    public $service , $name, $description , $icon; 
    protected $listeners = ['serviceUpdate'];

    public function serviceUpdate($id){
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        $this->resetValidation();
        $this->dispatch('editToggleModal');
    }

    public function rules(){
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
        ];
    }

    public function submit(){
        $data = $this->validate();
        $this->service->update($data);
        $this->dispatch('editToggleModal');
        $this->dispatch('refresh-services')->to(servicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-update');
    }
}
