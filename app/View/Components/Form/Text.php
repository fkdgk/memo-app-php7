<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Text extends Component
{
    public $value;
    public $type;
    public $class;
    public $name;
    public $label;
    public $placeholder;
    public $rows;
    public $margin;
    public function __construct($type='text',$value=null,$class=null,$label=null,$name=null,$placeholder=null,$rows=5,$margin=3)
    {
        $this -> value = $value;
        $this -> type = $type;
        $this -> class = $class;
        $this -> name = $name;
        $this -> label = $label;
        $this -> rows = $rows;
        $this -> margin = $margin;
        $this -> placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.text');
    }
}
