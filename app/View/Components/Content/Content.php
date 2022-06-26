<?php

namespace App\View\Components\Content;

use Illuminate\View\Component;

class Content extends Component
{
    public $position;
    public $class;
    public function __construct($position=null,$class=null)
    {
        $this -> position = $position;
        $this -> class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content.content');
    }
}
