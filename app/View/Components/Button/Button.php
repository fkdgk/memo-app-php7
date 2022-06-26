<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Button extends Component
{
    public $name;
    public $class;
    public $href;
    public $size;
    public $color;
    public $type;
    public $id;
    public $onclick;
    public function __construct($name=null,$class=null,$href=null,$size='normal-size',$color='primary',$type=null,$id=null,$onclick='javascript:void(0);')
    {
        $this -> name = $name;
        $this -> class = $class;
        $this -> href = $href;
        $this -> size = $size;
        $this -> color = $color;
        $this -> type = $type;
        $this -> id = $id;
        $this -> onclick = $onclick;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.button');
    }
}
