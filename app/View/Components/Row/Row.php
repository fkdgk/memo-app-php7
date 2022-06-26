<?php

namespace App\View\Components\Row;

use Illuminate\View\Component;

class Row extends Component
{
    public $class;
    public $center;
    public function __construct($class=null, $center=false)
    {
        $this ->class = $class;
        $this ->center = json_decode($center);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.row.row');
    }
}
