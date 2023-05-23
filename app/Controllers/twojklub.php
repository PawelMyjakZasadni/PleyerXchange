<?php

namespace App\Controllers;

use App\Models\klub;
use App\Controllers\BaseController;
use App\category;

class twojklub extends BaseController
{
    public function index()
    {
         // Pobierz dane z formularza
         $rokZalozenia = $this->request->getPost('rokZalozenia');
         $menedzer = $this->request->getPost('menedzer');
         $pracownicy = $this->request->getPost('pracownicy');
         $pilkarze = $this->request->getPost('pilkarze');
 
        
 
         // Zapisz dane do bazy danych
         $daneModel = new klub();
         $daneModel->save([
             'rok_zalozenia' => $rokZalozenia,
             'menedzer' => $menedzer,
             'pracownicy' => $pracownicy,
             'pilkarze' => $pilkarze
         ]);
        return view('twojklub/index');
    }
}
