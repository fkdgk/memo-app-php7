<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class TbodyTr extends Component
{
    public $id;
    public $href;
    public $hover;
    public $session;
    public function __construct($id=0,$href=null,$hover=false,$session=false)
    {
        $this -> id = $id;
        $this -> href = $href;
        $this -> session = $session;
        $this -> hover = json_decode($hover);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.tbody-tr');
    }
}
