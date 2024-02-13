<?php

namespace App\Livewire\Web\Auth;

use Livewire\Component;
use App\Models\AuthLogin;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Component
{
    public $userId;
    public $token;
    public $email;
    public $password;
    public $new_password;

    public function render()
    {
        return view('livewire.web.auth.reset-password');
    }

    public function mount()
    {
        //
    }

    public function passwordUpdate()
    {
        $this->validation();
        // dd($this->id);

        $new_password = bcrypt($this->new_password);

        $user = AuthLogin::find($this->userId);
        // dd($user);
        if($user)
        {
            // $user->update(['password' => Hash::make($new_password)]);
            AuthLogin::whereId($this->userId)->update(['password' => $new_password]);
            // dd($up);
            return redirect()->route('web.login.index');
        }else{
            return back();
        }
    }

    public function validation()
    {
        return $this->validate([
            // 'new_password' => [
            //     'required',
            // ],
            // 'confirm_password' => [
            //     'required',
            // ],
            'password' => [
                'required',
                'confirmed',
            ],

        ]);
    }

}