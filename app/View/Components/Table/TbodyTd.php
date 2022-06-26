<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class TbodyTd extends Component
{
    public $overflow;
    public function __construct($overflow=true)
    {
        $this -> overflow = json_decode($overflow);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.tbody-td');
    }
}
