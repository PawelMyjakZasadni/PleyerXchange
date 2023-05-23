<?php

namespace App\Models;

use CodeIgniter\Model;

class wypisz extends Model
{
    protected $table = 'innyklub';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nazwa_klubu',];
}
