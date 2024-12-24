<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Clicker extends Component
{

    public $username = "testuser";

    public function createNewUser()
    {
        User::create([
            'name' => 'Test User2',
            'email' => 'test@example2.com',
            'password' => Hash::make('password'),
        ]);
    }

    public function render()
    {
        $title = "test";
        $users = User::all();

        return view('livewire.clicker', compact('title', 'users'));
    }
}
