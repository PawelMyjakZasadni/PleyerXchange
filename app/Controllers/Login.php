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
            // Walidacja danych logowania
            $validation = \Config\Services::validation();
            $validation->setRules([
                'email' => 'required|valid_email',
                'password' => 'required'
            ]);

            if ($validation->withRequest($this->request)->run()) {
                // Pobranie danych logowania z formularza
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                // Sprawdzenie poprawności danych logowania
                $userModel = new Users();
                $user = $userModel->where('email', $email)->first();

                if ($user && password_verify($password, $user['password'])) {
                    // Poprawne uwierzytelnienie użytkownika, ustawienie sesji
                    $session = session();
                    $sessionData = [
                        'user_id' => $user['id'],
                        'email' => $user['email'],
                        'uprwanienie'=> $user['uprawnienie'],
                        'autoryzacja' => 1,
                        // Dodaj inne dane sesji, jeśli są potrzebne
                    ];
                    session()->set('moje_dane', 'Wartość danych');
                    $session->set($sessionData);

                     // Przekierowanie po pomyślnym zalogowaniu
                         return redirect()->to('sesja/index');
                } else {
                    // Błędne dane logowania
                    $data['error'] = 'Nieprawidłowy email lub hasło.';
                }
            } else {
                // Błąd walidacji, przekazanie błędów do widoku
                $data['validation'] = $validation->getErrors();
            }
        }

       // Wyświetlenie formularza logowania
    return view('login/index', $data);
    }
}



