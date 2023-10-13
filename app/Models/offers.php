<?php

namespace App\Models;

use CodeIgniter\Model;

class offers extends Model
{
    protected $table = 'offers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'id_user',
    'Cost',
    
   ];
}
