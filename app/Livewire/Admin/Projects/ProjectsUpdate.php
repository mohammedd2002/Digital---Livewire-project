<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class ProjectsUpdate extends Component
{
    use WithFileUploads;
    public $project, $name, $image, $description, $link, $category_id, $categories;
    protected $listeners = ['projectUpdate'];


    public function mount()
    {
        $this->categories = Category::all();
    }

    public function projectUpdate($id)
    {
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->description = $this->project->description;
        $this->link = $this->project->link;
        $this->category_id = $this->project->category_id;
        $this->resetValidation();
        $this->dispatch('editToggleModal');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'link' => 'nulllable|url',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'Category',
        ];
    }

    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());

        if ($this->image) {
            unlink(public_path('storage/images/' . $this->project->image));
            $newImage = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $newImage, 'public');
            $data['image'] = $newImage;
        }
        $this->project->update($data);
        $this->dispatch('editToggleModal');
        $this->dispatch('refresh-projects')->to(projectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-update');
    }
}
