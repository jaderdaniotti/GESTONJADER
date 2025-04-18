<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersIndex extends Component
{

    public function render()
    {
        $users = User::all();


        return view('livewire.users-index', compact('users'));
    }
}
