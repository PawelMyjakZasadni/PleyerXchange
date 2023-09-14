<?php

namespace App\Controllers;
use App\Models\Users;
use App\Controllers\BaseController;

class AdminPanel extends BaseController
{

public function index()
{
    $session = session();
    $autoryzacja = $session->get('autoryzacja');

    if ($autoryzacja != 1)
    {
        return redirect()->to('SessionController/clearSession');

    }
    $uprwanienie = $session->get('uprwanienie');
    if ($uprwanienie != 1)
    {
        return view('ofert/wofert');
    }
    

        
    return view('AdminPanel/index');

   
}
}