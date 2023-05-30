<?php

namespace App\Controllers;

class sesja extends BaseController
{
public function index()
{
    $session = session();
    $userId = $session->get('id');
    $email = $session->get('email');

    // Wykonaj inne operacje na podstawie danych sesji

    // Wyświetlenie widoku panelu użytkownika
    return view('sesja/index', [
        'id' => $userId,
        'email' => $email
    ]);
}
}