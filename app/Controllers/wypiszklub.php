<?php

namespace App\Controllers;

use App\Models\twklub;
use App\Controllers\BaseController;

class wypiszklub extends BaseController
{
    public function index()
    {
        $twklub = new twklub();
        $data['yours_clab'] = $twklub->findAll();
    
        return view('wypiszklub/index',$data);
       

    return view('wypiszklub/index', $data);
}
    
}
