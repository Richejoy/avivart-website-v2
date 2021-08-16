<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Newsletter extends Component
{
    public $btnColor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($btnColor)
    {
        $this->btnColor = $btnColor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.newsletter');
    }
}
