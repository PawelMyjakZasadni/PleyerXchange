<?php

namespace App\Controllers;

use App\Models\twklub;
use App\Controllers\BaseController;
use App\category;

class twojklub extends BaseController
{
    public function index()
    {
        $session = session();
        $autoryzacja = $session->get('autoryzacja');
    
        if ($autoryzacja != 1)
        {
            return redirect()->to('SessionController/clearSession');
    
        }
        else 
        {
            $twklub = new twklub();
            $data['yours_clab'] = $twklub->findAll();

            return view('wypiszklub/index',$data);
        }
        
       
       
    }
}
