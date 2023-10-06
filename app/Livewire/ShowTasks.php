<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTasks extends Component
{
use WithPagination;
    protected $paginationTheme='bootstrap';
    protected $listeners =["test"=>'$refresh'];
    public function render()
    {
        $tasks=Task::latest()->paginate(5);
        return view('livewire.show-tasks',['tasks'=>$tasks]);
    }

}
