<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class wyloguj extends BaseController
{
    public function logout()
    {
        // Usunięcie danych sesji użytkownika
        session()->destroy();

        // Przekierowanie po wylogowaniu
        return redirect()->to('/Home');
    }

}