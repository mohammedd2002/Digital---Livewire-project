<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    public $skill;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id){
       $this->skill = Skill::find($id);
        $this->dispatch('deleteToggleModal');
    }

    public function submit(){
        $this->skill->delete();
        $this->reset('skill'); //reset the skill property
        $this->dispatch('deleteToggleModal');
        $this->dispatch('refresh-skills')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
