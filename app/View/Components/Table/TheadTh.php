<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class TheadTh extends Component
{
    
    public $width;
    public $name;
    public function __construct($width=50, $name=null)
    {
        $this -> width = $width;
        $this -> name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.thead-th');
    }
}
