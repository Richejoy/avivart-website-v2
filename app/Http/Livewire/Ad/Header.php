<?php

namespace App\Http\Livewire\Ad;

use Livewire\Component;

class Header extends Component
{
    public $title;

    public function mount(string $title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.ad.header');
    }
}
