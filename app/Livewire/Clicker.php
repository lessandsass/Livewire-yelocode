<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{

    public function handleClick()
    {
        dump('clicked');
    }

    public function render()
    {
        $title = "test";
        $users = User::all();

        return view('livewire.clicker', compact('title', 'users'));
    }
}
