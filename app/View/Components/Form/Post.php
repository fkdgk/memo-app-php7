<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Post extends Component
{
    public $model;
    public function __construct($model=null)
    {
        $this -> model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.post');
    }
}
