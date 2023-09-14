<?php

namespace App\Controllers;

use App\Models\klub;
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
            return view('twojklub/index');
        }
        if ($this->request->getMethod() === 'post') {
            // Walidacja danych wejściowych
            $validation = \Config\Services::validation();
            $validation->setRules([
                'rok_zalozenia' => 'required',
                'menedzer' => 'required',
                'pracownicy' => 'required',
                'pilkarze' => 'required',
            ]);
            if ($validation->withRequest($this->request)->run()) {
                // Pomyślna walidacja, zapisujemy ofertę w bazie danych
                $offerModel = new klub();
        
                $data = [
                    'rok_zalozenia' => $this->request->getPost('rok_zalozenia'),
                    'menedzer' => $this->request->getPost('menedzer'),
                    'pracownicy' => $this->request->getPost('pracownicy'),
                    'pilkarze' => $this->request->getPost('pilkarze'),
                ];
        
                $offerModel->insert($data);
        
                // Przekierowanie po zapisaniu oferty
                return redirect()->to('wypiszklub/index');
            } else {
                // Błąd walidacji, przekazujemy błędy do widoku
                $data['validation'] = $validation->getErrors();
            }
        }
       
       
    }
}
