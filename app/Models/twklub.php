<?php

namespace App\Models;

use CodeIgniter\Model;

class yours_clab extends Model
{
    protected $table = 'yours_clab';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'players',
    'pozycja'
   ];
}
