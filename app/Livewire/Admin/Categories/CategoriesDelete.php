<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;

class CategoriesDelete extends Component
{
    public $category;
    protected $listeners = ['categoryDelete'];
    public function categoryDelete($id){
       $this->category = Category::find($id);
        $this->dispatch('deleteToggleModal');
    }

    public function submit(){
        $this->category->delete();
        $this->reset('category'); //reset the category property
        $this->dispatch('deleteToggleModal');
        $this->dispatch('refresh-categories')->to(categoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
