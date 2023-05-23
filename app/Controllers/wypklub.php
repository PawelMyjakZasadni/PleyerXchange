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

        return view('welcome_message', $count);
    }
}
