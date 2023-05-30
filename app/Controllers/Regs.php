<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Users;

//use Config\Database;

class Regs extends BaseController
{
   
    public function index()
{
    $data = [];

    if ($this->request->getMethod() === 'post') {
        // Walidacja danych wejściowych
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]'
        ]);

        if ($validation->withRequest($this->request)->run()) {
            // Pomyślna walidacja, dodajemy użytkownika do bazy danych
            $userModel = new Users();

            $user = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ];

            $userModel->insert($user);

            // Przekierowanie po pomyślnej rejestracji
            return redirect()->to('login/index');
        } else {
            // Błąd walidacji, przekazujemy błędy do widoku
            $data['validation'] = $validation->getErrors();
        }
    }

    // Wyświetlenie formularza rejestracji
    return view('regs/index', $data);
}

}

