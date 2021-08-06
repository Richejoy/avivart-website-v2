<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $title;

    public function mount(string $title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.user.breadcrumb');
    }
}
