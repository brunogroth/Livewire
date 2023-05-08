<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public string $email = '';
    public string $password = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $role = '';
    public string $company_name = '';
    public string $cnpj = '';

    protected $rules = [
        'first_name' => ['required', 'min:3', 'alpha'],
        'last_name' => ['required', 'min:2', 'alpha'],
        'email' => ['required', 'email'],
        'password' => ['required', 'min:8'],
        'company_name' => ['required_if:role, vendor'],
        'cnpj' => ['required_if:role,vendor']
    ];

    public function render()
    {
        return view('livewire.register-form');
    }

    public function submit()
    {
        $this->validate();

        if ($this->role === 'customer'){
            session()->flash('message', 'Customer was created.');
        }
        elseif ($this->role === 'vendor'){
            session()->flash('message', 'Vendor was created.');
        }

        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->password = '';
        $this->company_name = '';
        $this->cnpj = '';
        $this->role = 'customer';
    }

    public function updated($property)
    {
        // this is the responsible for real time validation
        $this->validateOnly($property);
    }
}
