<?php

namespace App\Controllers;
use App\Models\Users;

class mojprofil extends BaseController
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
       
    
        $userModel = new Users();
        $user_id = $session->get('user_id');

        $user = $userModel->find($user_id);

        if ($user) {
            $data['id'] = $user['id'];
            $data['email'] = $user['email'];
        } else {
            // Obsługa błędu, gdy użytkownik o danym ID nie istniej
            $data['name'] = '';
            $data['email'] = '';
        }

        return view('profil/index', $data);
    }   
    
 
}
public function edit()
{
   
       
return view('profil/edit');

    }
    public function update()
{
   
       
   

    return view('profil/update');

    }

}