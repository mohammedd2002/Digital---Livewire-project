<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;

class UpdatedSettingsComponent extends Component
{

    public $settings;

    public function mount(){
        $this->settings = \App\Models\Setting::first();
    }

    public function rules(){
        return[
            'settings.name' => 'required|string',
            'settings.email' => 'required|email',
            'settings.phone' => 'required',
            'settings.address' => 'required',
            'settings.facebook' => 'nullable|url',
            'settings.twitter'=> 'nullable|url',
            'settings.instagram' => 'nullable|url',
            'settings.linkedin' => 'nullable|url',
        ];
    }

    public function submit(){
        $this->validate();
        $this->settings->save();
        session()->flash('message', 'Settings Updated Successfully');
    }

    public function render()
    {
        return view('admin.settings.updated-settings-component');
    }
}
