<?php

namespace App\Controllers;

use App\Models\klub;
use App\Controllers\BaseController;

class innyklub extends BaseController
{
    public function index()
    {
        $session = session();
        $autoryzacja = $session->get('autoryzacja');

        if ($autoryzacja != 1)
        {
            return redirect()->to('SessionController/clearSession');
    
        }
       
       
          
        
         
            $klub = new klub();
            $data['club'] = $klub->findAll();
            
        return view('innyklub/index', $data);




        
    }
}
