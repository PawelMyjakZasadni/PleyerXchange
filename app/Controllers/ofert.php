<?php

namespace App\Controllers;

use App\Models\ofertt;
use App\Controllers\BaseController;
class ofert extends BaseController
{
    public function index()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            // Walidacja danych wejściowych
            $validation = \Config\Services::validation();
            $validation->setRules([
                'club_name' => 'required',
                'manager' => 'required',
                'price' => 'required',
                'rental_period' => 'required',
                'submitter' => 'required'
            ]);

            if ($validation->withRequest($this->request)->run()) {
                // Pomyślna walidacja, zapisujemy ofertę w bazie danych
                $offerModel = new ofertt();

                $data = [
                    'club_name' => $this->request->getPost('club_name'),
                    'manager' => $this->request->getPost('manager'),
                    'price' => $this->request->getPost('price'),
                    'rental_period' => $this->request->getPost('rental_period'),
                    'submitter' => $this->request->getPost('submitter')
                ];

                $offerModel->insert($data);

                // Przekierowanie po zapisaniu oferty
                return redirect()->to('/sesja');
            } else {
                // Błąd walidacji, przekazujemy błędy do widoku
                $data['validation'] = $validation->getErrors();
            }
        }

        // Wyświetlenie formularza składania oferty
        return view('ofert/index', $data);
    }



}