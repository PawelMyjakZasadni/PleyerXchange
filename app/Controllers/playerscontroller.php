<?php

namespace App\Controllers;

use App\Models\players;

class playerscontroller extends BaseController
{
     public function index()
        {
            $session = session();
     
            $autoryzacja = $session->get('autoryzacja');
       
            if ($autoryzacja != 1)
            {
                return redirect()->to('SessionController/clearSession');
        
            }
            
            $players = new players();
            $data['players'] = $players->findAll();
            return view('players/index',$data);
        }

}

?>