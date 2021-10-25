<?php

namespace App\Http\Livewire\Cosmetic;

use Livewire\Component;
use App\Models\ArticleRay;

class Header extends Component
{
    public $title;

    public function mount(string $title)
    {
        $this->title = $title;
    }

    public function render()
    {
        $articleRays = ArticleRay::with('articleCategories')->get();

        return view('livewire.cosmetic.header', compact('articleRays'));
    }
}
