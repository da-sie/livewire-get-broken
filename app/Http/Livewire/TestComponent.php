<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestComponent extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public $myvar;

    public function mount()
    {
        $this->myvar = 'CHECK';
    }

    public function render()
    {
        return view('livewire.test-component');
    }

    public function someAction()
    {
        $this->myvar = 'WORKS';
    }
}
