<?php

namespace App\Controllers;

use App\Models\klub;
use App\Controllers\BaseController;

class twojklub extends BaseController
{
    public function index()
    {
        $daneModel = new klub();
        $count = $daneModel->countAllResults();

        $count = [
            'count'=> $count
        ];


        $session = session();
        $autoryzacja = $session->get('autoryzacja');
    
        if ($autoryzacja != 1)
        {
            return redirect()->to('SessionController/clearSession');
    
        }
        else 
        {
            return view('welcome_message', $count);
        }


        
    }
}
