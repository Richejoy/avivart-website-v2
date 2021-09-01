<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    public function login()
    {
        dd('ok');
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
