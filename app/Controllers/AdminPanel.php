<?php

namespace App\Controllers;
use App\Models\players;
use App\Models\klub;
use App\Controllers\BaseController;

class AdminPanel extends BaseController
{

public function index()
    {
    $session = session();
    $autoryzacja = $session->get('autoryzacja');

    if ($autoryzacja != 1)
    {
        return redirect()->to('SessionController/clearSession');

    }
    $uprwanienie = $session->get('uprwanienie');
    if ($uprwanienie != 1)
    {
        return view('sesja/index');
    }
    
    //$klub = new klub();
    //$data['club'] = $klub->findAll();
     
    //$players = new klub();
    //$data['players'] = $players->findAll();

    $klub = new klub();
    $data['club'] = $klub->findAll(); // Zmiana nazwy zmiennej $club na $clubs

    $players = new players(); // Utwórz obiekt dla modelu players, jeśli nie został utworzony wcześniej
    $data['players'] = $players->findAll();

        
    return view('AdminPanel/index',$data,$data);

   
    }

    public function create()
    {
        return view('AdminPanel/create');
    }
    public function createP()
    {
        return view('AdminPanel/createP');
    }

 public function store()
 {
    $klub = new klub();
    $data = [
        'name_club' => $this->request->getPost('name_club'),
        'league' => $this->request->getPost('league'),
    ];
    $klub->save($data);
    return redirect()->to(base_url('index.php/AdminPanel'))->with('status','klub added successfuly');

 }
 public function storeP()
 {
    $players = new players();
    $data = [
        'first_name' => $this->request->getPost('first_name'),
        'last_name' => $this->request->getPost('last_name'),
        'club' => $this->request->getPost('club'),
        'age' => $this->request->getPost('age'),
        'position' => $this->request->getPost('position'),
        'price' => $this->request->getPost('price'),
    ];
    $players->save($data);
    return redirect()->to(base_url('index.php/AdminPanel'))->with('status','players added successfuly');

 }

public function edit($id)
{
    $session = session();
    $autoryzacja = $session->get('autoryzacja');

    if ($autoryzacja != 1)
    {
        return redirect()->to('SessionController/clearSession');

    }
    $uprwanienie = $session->get('uprwanienie');
    if ($uprwanienie != 1)
    {
        return view('sesja/index');
    }
    $klub = new klub();
    $data['club']=$klub->find($id);

    return view('AdminPanel/edit', $data);

}
public function editP($id)
{
    $session = session();
    $autoryzacja = $session->get('autoryzacja');

    if ($autoryzacja != 1)
    {
        return redirect()->to('SessionController/clearSession');

    }
    $uprwanienie = $session->get('uprwanienie');
    if ($uprwanienie != 1)
    {
        return view('sesja/index');
    }
    $players = new players();
    $data['players']=$players->find($id);

    return view('AdminPanel/editP', $data);

}
public function update($id)
{
    $session = session();
    $autoryzacja = $session->get('autoryzacja');

    if ($autoryzacja != 1)
    {
        return redirect()->to('SessionController/clearSession');

    }
    $uprwanienie = $session->get('uprwanienie');
    if ($uprwanienie != 1)
    {
        return view('sesja/index');
    }

    $klub = new klub();
    $data = [
        'name_club' => $this->request->getPost('name_club'),
        'league' => $this->request->getPost('league'),
    ];
    $klub->update($id, $data);
    return redirect()->to(base_url('AdminPanel/index'))->with('status','klub updated successfuly');






    $klub = new klub();
    $data = [
        'name_club' => $this->request->getPost('name_club'),
        'league' => $this->request->getPost('league'),
    ];
    $klub->save($data);
    return redirect()->to(base_url('index.php/AdminPanel'))->with('status','klub added successfuly');
}

public function updateP($id)
{
    $session = session();
    $autoryzacja = $session->get('autoryzacja');

    if ($autoryzacja != 1)
    {
        return redirect()->to('SessionController/clearSession');

    }
    $uprwanienie = $session->get('uprwanienie');
    if ($uprwanienie != 1)
    {
        return view('sesja/index');
    }

    $players = new players();
    $data = [
        'first_name' => $this->request->getPost('first_name'),
        'last_name' => $this->request->getPost('last_name'),
        'club' => $this->request->getPost('club'),
        'age' => $this->request->getPost('age'),
        'position' => $this->request->getPost('position'),
        'price' => $this->request->getPost('price'),
    ];
    $players->update($id, $data);
    return redirect()->to(base_url('AdminPanel/index'))->with('status','klub updated successfuly');






    $players = new players();
    $data = [
        'first_name' => $this->request->getPost('first_name'),
        'last_name' => $this->request->getPost('last_name'),
        'club' => $this->request->getPost('club'),
        'age' => $this->request->getPost('age'),
        'position' => $this->request->getPost('position'),
        'price' => $this->request->getPost('price'),
    ];
    $players->save($data);
    return redirect()->to(base_url('index.php/AdminPanel'))->with('status','klub added successfuly');
}


public function delete($id)
{
    $klub = new klub();
    $klub->delete($id);
    return redirect()->to(base_url('index.php/AdminPanel'))->with('status','klub deleted successfuly');

}
public function deleteP($id)
{   
    $players = new players();
    $players->delete($id);
    return redirect()->to(base_url('index.php/AdminPanel'))->with('status','klub deleted successfuly');

}

}