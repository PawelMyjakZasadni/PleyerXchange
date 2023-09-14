<?php

namespace App\Controllers;
use App\Models\Users;
use CodeIgniter\Controller;

class SessionController extends Controller
{
    public function clearSession()
    {
      // Usunięcie danych sesji użytkownika
      session()->destroy();

      // Przekierowanie po wylogowaniu
      return redirect()->to('/login');
    }
     

    public function index()
    {
        // Inicjowanie sesji
         $session = session();

        // Ustawianie danych sesji

    $user_id = $session->get('user_id');
    $email = $session->get('email');
    $uprawnienie = $session->get('uprawnienie');
    $autoryzacja = $session->get('autoryzacja');

        // Wyświetlanie danych sesji

         echo 'User Name: ' .   $autoryzacja. '<br>';

    // Sprawdzenie, czy użytkownik jest zalogowany
    if ($session->has('email')) {
       // Pobranie użytkownika z bazy danych na podstawie identyfikatora sesji
       $userModel = new Users();
       $user = $userModel->where('email', $email)->first();
        if ($user) {

            if ($autoryzacja != 1)
            {
                echo '1';
                $this->clearSession();
            }
            else 
            {
              echo $autoryzacja ; 
              echo 'napisz tam cos ';
            }
        } 
        else {
            echo '0';

            $this->clearSession();
        }
       

    } 
    
}


}
