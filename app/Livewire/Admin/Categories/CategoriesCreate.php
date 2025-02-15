<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesCreate extends Component
{

    public $name;


  
    public function rules(){
        return [
            'name' => 'required|string|max:255',
           
        ];
    }

    public function submit(){
        $data = $this->validate();
        Category::create($data);
        $this->reset();
        $this->dispatch('close-modal');
        $this->dispatch('refresh-categories')->to(CategoriesData::class);
    }

    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
