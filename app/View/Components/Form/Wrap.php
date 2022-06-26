<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Wrap extends Component
{
    public $margin;
    public function __construct($margin=3)
    {
        $this -> margin = $margin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.wrap');
    }
}
