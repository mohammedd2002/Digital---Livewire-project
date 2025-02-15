<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsDelete extends Component
{

    public $project;
    protected $listeners = ['projectDelete'];
    public function projectDelete($id){
       $this->project = Project::find($id);
        $this->dispatch('deleteToggleModal');
    }

    public function submit(){
        unlink(public_path('storage/images/' . $this->project->image));
        $this->project->delete();
        $this->reset('project'); //reset the project property
        $this->dispatch('deleteToggleModal');
        $this->dispatch('refresh-projects')->to(projectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-delete');
    }
}
