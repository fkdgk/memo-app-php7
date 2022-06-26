<?php

namespace App\View\Components\Nav;

use Illuminate\View\Component;

class Item extends Component
{
    public $name;
    public $href;
    public $onclick;
    public $class;
    public $btn;
    public function __construct($name=null,$href='javascript:void(0);',$onclick='false',$class=null,$btn=false)
    {
        $this -> name = $name;
        $this -> href = $href;
        $this -> onclick = $onclick;
        $this -> class = $class;
        $this -> btn = $btn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.item');
    }
}
