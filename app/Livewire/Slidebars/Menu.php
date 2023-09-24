<?php

namespace App\Livewire\Slidebars;

use Livewire\Component;

class Menu extends Component
{

    public $menuName;
    public $routeName;

    public function render()
    {
        return view('livewire.slidebars.menu');
    }
}
