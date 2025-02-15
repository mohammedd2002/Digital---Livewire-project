<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{
    public $skill , $name, $progress; 
    protected $listeners = ['skillUpdate'];

    public function skillUpdate($id){
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->resetValidation();
        $this->dispatch('editToggleModal');
    }

    public function rules(){
        return [
            'name' => 'required|string|max:255',
            'progress' => 'required|integer|min:1|max:100',
        ];
    }

    public function submit(){
        $data = $this->validate();
        $this->skill->update($data);
        $this->dispatch('editToggleModal');
        $this->dispatch('refresh-skills')->to(SkillsData::class);
    }

    public function render()
    {
        return view('admin.skills.skills-update');
    }
}
