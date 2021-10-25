<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;
use App\Models\ProductRay;

class Header extends Component
{
    public $title;

    public function mount(string $title)
    {
        $this->title = $title;
    }

    public function render()
    {
        $productRays = ProductRay::with('image', 'productCategories')->get();

        return view('livewire.store.header', compact('productRays'));
    }
}
