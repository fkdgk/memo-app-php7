<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public function __construct($title=null)
    {
        $this -> title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.card');
    }
}
