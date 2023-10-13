<?php

namespace App\Controllers;

class sesja extends BaseController
{
public function index()
{

    $session = session();
    $userId = $session->get('id');
    $email = $session->get('email');







    $autoryzacja = $session->get('autoryzacja');

    if ($autoryzacja != 1)
    {
        return redirect()->to('SessionController/clearSession');

    }
    else 
    {
        return view('sesja/index', [
            'id' => $userId,
           'email' => $email
        ]);
    }
}

    
}
