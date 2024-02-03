<?php

namespace App\Livewire\Web\Auth;

use Livewire\Component;
use App\Models\AuthLogin;
use App\Notifications\ResetPasswordNotification;

class ForgotPassword extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.web.auth.forgot-password');
    }

    public function PasswordLink()
    {

        $this->validation();

        $email = $this->email;

        $user = AuthLogin::where('email', $email)->first();

        $resetPasswordLink = route('reset.password', $email);

        $user->notify(new ResetPasswordNotification($resetPasswordLink));


    }

    protected function validation()
    {
        return $this->validate([
            'email' => [
                'required',
                'email',
            ],
        ]);
    }
}
