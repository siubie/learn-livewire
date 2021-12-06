<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    public $name = 'Soko Sama';

    public function mount($name)
    {
        $this->name = $name;
    }

    //updated   
    public function updated($name)
    {
        $this->name = strtoupper($name);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
