<?php

namespace App\Controllers;
use App\Models\Users;

class mojprofil extends BaseController
{
public function index()
{
    $userModel = new Users();
        $userId = 2; // ID użytkownika, którego dane chcesz wyświetlić

        $user = $userModel->find($userId);

        if ($user) {
            $data['name'] = $user['name'];
            $data['email'] = $user['email'];
        } else {
            // Obsługa błędu, gdy użytkownik o danym ID nie istnieje
            $data['name'] = '';
            $data['email'] = '';
        }

        
    
    $session = session();
    $autoryzacja = $session->get('autoryzacja');

    if ($autoryzacja != 1)
    {
        return redirect()->to('SessionController/clearSession');

    }
    else 
    {
        return view('profil/index', $data);
    }
}
}