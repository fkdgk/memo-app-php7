<?php

namespace App\View\Components\Alert;

use Illuminate\View\Component;

class Alert extends Component
{

    public $alert;
    public function __construct($alert=null)
    {
        $this -> alert = $alert;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert.alert');
    }
}
