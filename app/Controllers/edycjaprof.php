<?php

namespace App\Controllers;
use App\Models\Users;
use App\Controllers\BaseController;

class edycjaprof extends BaseController
{

public function index()
{
    
    // Pobierz dane z formularza edycji
    $nowaNazwaUzytkownika = $this->request->getPost('name');
    $nowyEmail = $this->request->getPost('email');

    // Przykładowa walidacja danych

    $walidacja = \Config\Services::validation();
    $walidacja->setRules([
        'nazwa_uzytkownika' => 'required|min_length[3]',
        'email' => 'required|valid_email'
    ]);

    if ($walidacja->withRequest($this->request)->run()) {
        $daneModel = new Users();
        $daneModel->save([
            'neme' =>  $nowaNazwaUzytkownika,
            'email' => $nowyEmail,
            
        ]);

        // Przekieruj na stronę moj-profil z komunikatem sukcesu
        return redirect()->to('mojprofil')->with('success', 'Dane zostały zaktualizowane.');
    } else {
        // Jeśli walidacja nie powiodła się, przekieruj z błędami walidacji
        return redirect()->to('edycjaprof')->with('errors', $walidacja->getErrors());
    }
     return view('edycja/index');
}
}