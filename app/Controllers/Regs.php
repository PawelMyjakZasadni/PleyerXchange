<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Users;

//use Config\Database;

class Regs extends BaseController
{
    public function index()
    {

        if(session('isLoggedIn'))
        {
            return redirect()->to('/template');
        }

        $db = \Config\Database::connect();
        d($db->query('show databases')->getResultArray());
        helper('form');

        if($this->request->getMethod() === 'post')
        {
            /** @var Users $users */
            $users = model('Users');

            $user = [
                'login' => $this->request->getPost('login'),
                'password' => $this->request->getPost('password'),
            ];
            
            $usersModel = new users(); // Create an instance of the users class
            
            if (!$usersModel->save($user)) { // Assuming "save" is a method in the users class
                return redirect()->back()->withInput()->with('errors', $usersModel->errors());
            }
            
            return redirect()->to('login')->with('message', 'Użytkownik został utworzony');
        }

        return view('regs/index');
    }
}
