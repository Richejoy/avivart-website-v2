<?php

namespace App\Http\Livewire\Ad;

use Livewire\Component;
use App\Models\AdRay;

class Header extends Component
{
    public $title;

    public function mount(string $title)
    {
        $this->title = $title;
    }

    public function render()
    {
        $adRays = AdRay::with('adCategories')->get();

        return view('livewire.ad.header', compact('adRays'));
    }
}
