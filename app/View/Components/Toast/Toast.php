<?php

namespace App\View\Components\Toast;

use Illuminate\View\Component;

class Toast extends Component
{
    public $toast;
    public function __construct($toast=null)
    {
        $this -> toast = $toast;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.toast.toast');
    }
}
