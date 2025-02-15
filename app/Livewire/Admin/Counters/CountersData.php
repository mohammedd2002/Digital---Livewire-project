<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;


class CountersData extends Component
{
    use WithPagination;
    
    public $search;
    protected $listeners = ['refresh-counters' => '$refresh'];
    
    

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        return view('admin.counters.counters-data' , [
            'counters' => Counter::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
