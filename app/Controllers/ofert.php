<?php

namespace App\Controllers;
use App\Models\offers;

use App\Controllers\BaseController;
class ofert extends BaseController
{
    public function index()
    {
        $offers = new offers();
        $data['offers'] = $offers->findAll(); // Zmiana nazwy zmiennej $club na $clubs
    
       


        return view('ofert/index',$data);

       
    }
    public function create()
    {
        return view('ofert/create');
    }

    public function store()
    {
        $offers = new offers();
       $data = [
           'id_user' => $this->request->getPost('id_user'),
           'Cost' => $this->request->getPost('Cost'),
       ];
       $offers->save($data);
       return redirect()->to(base_url('index.php/ofert'))->with('status','klub added successfuly');
   
    }
    public function delete($id)
{
    $offers = new offers();
    $offers->delete($id);
    return redirect()->to(base_url('index.php/ofert'));

}
//public function index()
//{
//    $session = session();
   // $user_id = $session->get('user_id');
  //  $offers = new offers();
//$data['offers'] = $offers->where('id_user', $user_id)->findAll(); // Użyj metody findAll() aby pobrać wyniki zapytania


   // return view('ofert/index', $data);
//}
}