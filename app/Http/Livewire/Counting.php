<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counting extends Component
{
    public $count = 0;

    public $isOpen = false;

    public function render()
    {
        return view('livewire.counting')->with(compact('count'));
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count > 0 && $this->count--;
    }

    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }
}
