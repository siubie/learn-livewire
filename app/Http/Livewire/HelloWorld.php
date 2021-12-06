<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    public $name = 'Soko Sama';

    public function mount(Request $request, $name)
    {
        $this->name = $request->name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
