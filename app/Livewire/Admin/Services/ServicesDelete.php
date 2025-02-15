<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $service;
    protected $listeners = ['serviceDelete'];
    public function serviceDelete($id){
       $this->service = Service::find($id);
        $this->dispatch('deleteToggleModal');
    }

    public function submit(){
        $this->service->delete();
        $this->reset('service'); //reset the service property
        $this->dispatch('deleteToggleModal');
        $this->dispatch('refresh-services')->to(servicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-delete');
    }
}
