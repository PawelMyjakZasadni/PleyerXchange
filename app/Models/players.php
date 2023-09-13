<?php

namespace App\Models;

use CodeIgniter\Model;

class players extends Model
{
    protected $table = 'players';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'first_name',
    'last_name',
    'club',
    'age',
    'position',
    'price',
   ];
}
