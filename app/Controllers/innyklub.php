<?php

namespace App\Controllers;

use App\Models\wypisz;
use App\Controllers\BaseController;

class innyklub extends BaseController
{
    public function index()
    {
        $daneModel = new wypisz();
        $dane = $daneModel->findAll();

        $data = [
            'dane' => $dane
        ];

        return view('innyklub/index', $data);
    }
}
