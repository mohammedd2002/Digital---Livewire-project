<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;

class ServicesComponent extends Component
{
    public $count = 6;
    public function render()
    {
        return view('front.components.services-component' , ['services' => \App\Models\Service::take($this->count)->get()]);
    }
}
