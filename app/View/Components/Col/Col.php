<?php

namespace App\View\Components\Col;

use Illuminate\View\Component;

class Col extends Component
{
    public $class;
    public function __construct($class=null)
    {
        $this -> class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.col.col');
    }
}
