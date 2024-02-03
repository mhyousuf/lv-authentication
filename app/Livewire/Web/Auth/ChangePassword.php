<?php

namespace App\Livewire\Web\Auth;

use Livewire\Component;
use App\Models\AuthLogin;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{

    public $current_password;
    public $new_password;
    public $confirm_password;

    public function render()
    {
        return view('livewire.web.auth.change-password');
    }

    public function changePassword()
    {
        $this->validation();

        $id = auth()->guard('web')->user()->id;
        $current_password = $this->current_password;
        $new_password = bcrypt($this->new_password);

        $pass = AuthLogin::find($id);

        if(Hash::check($current_password, $pass->password)) {

            AuthLogin::whereId($id)->update(['password' => $new_password]);
            // AuthLogin::whereId(auth()->guard('web')->id())->update(['password' => $newPassword]);

            return '1';
        }else{
            return '0';
        }


        // session()->flash('message', 'Password changed successfully.');

    }

    protected function validation()
    {
        return $this->validate([
            'current_password' => [
                'required',
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
