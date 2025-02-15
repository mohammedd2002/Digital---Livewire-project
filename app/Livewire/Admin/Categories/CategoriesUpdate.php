<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;

class CategoriesUpdate extends Component
{

    public $category , $name ; 
    protected $listeners = ['categoryUpdate'];

    public function categoryUpdate($id){
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->resetValidation();
        $this->dispatch('editToggleModal');
    }

    public function rules(){
        return [
            'name' => 'required|string|max:255',
        ];
    }

    public function submit(){
        $data = $this->validate();
        $this->category->update($data);
        $this->dispatch('editToggleModal');
        $this->dispatch('refresh-categories')->to(categoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
