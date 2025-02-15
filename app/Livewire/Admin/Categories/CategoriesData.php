<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoriesData extends Component
{

    use WithPagination;
    
    public $search;
    protected $listeners = ['refresh-categories' => '$refresh'];
    
    

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        return view('admin.categories.categories-data' , [
            'categories' => Category::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
   
}
