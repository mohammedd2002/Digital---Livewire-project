<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{

   
    public $name;
    public $progress;

  
    public function rules(){
        return [
            'name' => 'required|string|max:255',
            'progress' => 'required|integer|min:1|max:100',
        ];
    }

    public function submit(){
        $data = $this->validate();
        skill::create($data);
        $this->reset();
        $this->dispatch('close-modal');
        $this->dispatch('refresh-skills')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-create');
    }
}
