<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function mount()
    {
        $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.test');
    }
}
