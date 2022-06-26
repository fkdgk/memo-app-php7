<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Select extends Component
{
    public $value;
    public $options;
    public $name;
    public $label;
    public $class;
    public $multiple;
    public $model;
    public $onlyValue;
    public function __construct($value=null,$options=null,$name=null,$label=null,$class=null,$multiple=false,$model=null,$onlyValue=false)
    {
        $this -> value = $value;
        $this -> options = $options;
        $this -> name = $name;
        $this -> label = $label;
        $this -> class = $class;
        $this -> multiple = json_decode($multiple);
        $this -> onlyValue = json_decode($onlyValue);
        $this -> model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
