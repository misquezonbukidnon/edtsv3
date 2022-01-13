<?php

namespace App\Http\Livewire\Auth;

use App\Models\Office;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class Register extends Component
{
    /** @var string */
    public $role_id = '';

    /** @var collection */
    public $office = '';

    /** @var string */
    public $office_id = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $firstname = '';

    /** @var string */
    public $middlename = '';

    /** @var string */
    public $lastname = '';

    /** @var string */
    public $contact = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';

    public function mount()
    {
        $this->office = Office::all();
    }

    public function register()
    {
        $this->validate([
            'role_id' => ['required'],
            'office_id' => ['required'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        $user = User::create([
            'role_id' => $this->role_id,
            'office_id' => $this->office_id,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'contact' => $this->contact,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
