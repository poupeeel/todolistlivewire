<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTask extends Component
{
    public $task;
    public function render()
    {
        return view('livewire.add-task');
    }
    public function addTask(){
        Task::create([
            'taskname'=>$this->task
        ]);
        $this->task="";

        $this->dispatch('test');
    }



}

