<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class Login extends BaseController
{
    public function index()
    {
        helper('form');

        if($this->request->getMethod() === 'post')
        {
            /** @var Users $repository */
            $repository = model('Users');

            $user = $repository->where(
                'login', $this->request->getPost('login')
            )->first();

            if(
                !$user ||
                !password_verify($this->request->getPost('password'), $user['password'])
            ){
                return redirect()
                    ->to('/login')
                    ->withInput()
                    ->with('errors', 'Błędne hasło');
            }

            $session = Service::session();
            $session->set('isLoggedIn', true);
            $session->set('userData', [
                'id' => $user['id'],
                'login' => $user['login'],
            ]);

            return redirect()->to('/Home');
        }

        return view('login/index');
    }

    public function logout(){

        $session = Service::session();
        $session->destroy();

        return redirect()
            ->to('/login')
            ->withInput()
            ->with('message', 'Wylogowano.');
    }

}
