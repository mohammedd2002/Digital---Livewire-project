<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;

    public $name, $image, $description, $link, $category_id, $categories;


    public function mount()
    {
        $this->categories = Category::all();
    }
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'link' => 'nullable|url',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function attributes(){
        return [
            'category_id' => 'Category',
        ];
    }


    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());

        $newImage = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $newImage, 'public');
        $data['image'] = $newImage;
        Project::create($data);
        $this->reset(['name', 'description', 'link', 'image', 'category_id']);
        $this->dispatch('close-modal');
        $this->dispatch('refresh-projects')->to(projectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-create');
    }
}
