<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{

    public $skill ,$name , $progress;
    protected $listeners = ['skillShow'];
    public function skillShow($id){
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->dispatch('showToggleModal');
    }
    public function render()
    {
        return view('admin.skills.skills-show');
    }
}
