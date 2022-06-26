<?php

namespace App\View\Components\Badge;

use Illuminate\View\Component;

class Badge extends Component
{
    public $name;
    public $color;
    public function __construct($name=null, $color='primary')
    {
        $this -> name = $name;
        $this -> color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.badge.badge');
    }
}
