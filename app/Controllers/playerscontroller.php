<?php

namespace App\Controllers;

use App\Models\players;

class playerscontroller extends BaseController
{
     public function index()
        {
            $players = new players();
            $data['players'] = $players->findAll();
            return view('players/index',$data);
        }

}

?>