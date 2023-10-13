<?php

namespace App\Controllers;
use App\Models\yoursclabs;

class yours_clab extends BaseController
{
public function index()
{
    
        $yoursclab = new yoursclabs();
        $data['yours_clab'] = $yoursclab->findAll();

        return view('yours_clab/index',$data); 
 
}
public function create()
{
    $db = \Config\Database::connect(); // ładowanie bazy danych

   // Pobranie danych z bazy danych dla pozycji
$query_positions = $db->query("SELECT * FROM position"); // zmień 'nazwa_tabeli' na rzeczywistą nazwę tabeli

$data['options_positions'] = array();

$count = 0; // Licznik do obsługi czterech wartości

foreach ($query_positions->getResult() as $row) {
    if ($count < 4) {
        $data['options_positions'][] = $row->pozycja; // zmień 'nazwa_kolumny' na rzeczywistą nazwę kolumny zawierającą wartości
        $count++;
    } else {
        break;
    }
}

// Pobranie danych z bazy danych dla graczy
$query_players = $db->query("SELECT * FROM players"); // zmień 'nazwa_tabeli' na rzeczywistą nazwę tabeli
$data['options_players'] = array();

$count = 0; // Licznik do obsługi czterech wartości

foreach ($query_players->getResult() as $row) {
    if ($count < 4) {
        $data['options_players'][] = $row->first_name; // zmień 'nazwa_kolumny' na rzeczywistą nazwę kolumny zawierającą wartości
        $count++;
    } else {
        break;
    }
    }



    return view('yours_clab/create', $data); // załadowanie widoku
    }
public function store()
    {
        $yoursclab = new yoursclabs();
        $data = [
            'players' => $this->request->getPost('players'), // zmień 'players' na rzeczywistą nazwę z formularza
             'pozycja' => $this->request->getPost('pozycja'), // zmień 'pozycja' na rzeczywistą nazwę z formularza
        ];
        $yoursclab->save($data);
        return redirect()->to(base_url('yours_clab'))->with('status','playres added successfuly');
    }
    public function delete($id)
    {
        $yoursclab = new yoursclabs();
        $yoursclab->delete($id);
        return redirect()->to(base_url('yours_clab'))->with('status','players deleted successfuly');

    }

}




