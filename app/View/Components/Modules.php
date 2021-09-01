<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modules extends Component
{
    public string $headerText = "Domaines d’activité";

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public ?string $content = null)
    {
        if (!is_null($content)) {
            $this->headerText = "Authentification";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modules');
    }
}
