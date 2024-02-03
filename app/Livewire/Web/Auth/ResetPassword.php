<?php

namespace App\Livewire\Web\Auth;

use Livewire\Component;
use App\Models\AuthLogin;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Component
{
    public $id;
    public $email;
    public $new_password;
    public $confirm_password;

    public function render()
    {
        // $email = ($this->email);
        return view('livewire.web.auth.reset-password');
    }

    public function mount()
    {
        // $user = AuthLogin::where('email', $email)->first();
        $user = AuthLogin::find($this->id);
        // $id = $this->id;
        dd($user);
        // $this->id = $user ? $user->id : null;
    }

    public function passwordUpdate()
    {
        // $this->validation();
        // dd($this->id);

        $id = $this->id;
        $email = $this->email;
        $new_password = bcrypt($this->new_password);

        $user = AuthLogin::find($id);
        dd($user);
        if($user)
        {
            // $user->update(['password' => Hash::make($new_password)]);
            AuthLogin::whereId($id)->update(['password' => $new_password]);
            // dd($up);
            return '1';
        }else{
            return '0';
        }
    }

    public function validation()
    {
        return $this->validate([
            'email' => [
                'email',
            ],
            'new_password' => [
                'required',
            ],
            'confirm_password' => [
                'required',
            ],

        ]);
    }

}