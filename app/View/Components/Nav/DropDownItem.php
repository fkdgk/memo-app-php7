<?php

namespace App\View\Components\Nav;

use Illuminate\View\Component;

class DropDownItem extends Component
{
    public $name;
    public $route;
    public function __construct($name=null,$route=null)
    {
        $this->name=$name;
        $this->route=$route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.drop-down-item');
    }
}
