<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Form extends Component
{
    public $route;
    public $submit;
    public function __construct($route=null,$submit='新規作成')
    {
        $this -> route = $route;
        $this -> submit = $submit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.form');
    }
}
