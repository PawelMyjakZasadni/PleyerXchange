<?php

namespace App\Controllers;

use App\Models\klub;
use App\Controllers\BaseController;

class wypiszklub extends BaseController
{
    public function index()
    {
    $daneModel = new klub();

    // Pobierz dane z bazy danych
    $dane = $daneModel->findAll();

    $data['dane'] = $dane;

    return view('wypiszklub/index', $data);
}
public function edycja($id)
{
        $daneModel = new klub();
        $dane = $daneModel->find($id);
    
        $dane = [
            'rok_zalozenia' => $this->request->getPost('rok_zalozenia'),
            'menedzer' => $this->request->getPost('menedzer'),
            'pracownicy' => $this->request->getPost('pracownicy'),
            'pilkarze' => $this->request->getPost('pilkarze'),
        ];
       $daneModel ->update($id, $dane);
         return view('wypiszklub/edycja'); 
    }
    
}
