<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class Login extends BaseController
{
    public function index()
{
    $data = [];

    if ($this->request->getMethod() === 'post') {
        // Walidacja danych wejściowych
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required'
        ]);

        if ($validation->withRequest($this->request)->run()) {
            // Pomyślna walidacja, sprawdzamy dane logowania
            $userModel = new Users();

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $userModel->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Poprawne dane logowania, zaloguj użytkownika
                // Możesz zaimplementować mechanizm sesji lub inną formę uwierzytelniania

                // Przekierowanie po pomyślnym zalogowaniu
                return redirect()->to('/Home');
            } else {
                // Niepoprawne dane logowania
                $data['error'] = 'Nieprawidłowy email lub hasło';
            }
        } else {
            // Błąd walidacji, przekazujemy błędy do widoku
            $data['validation'] = $validation->getErrors();
        }
    }

    // Wyświetlenie formularza logowania
    return view('login/index', $data);
}
}

