<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputGroup extends Component
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
        return view('components.form.input-group');
    }
}
