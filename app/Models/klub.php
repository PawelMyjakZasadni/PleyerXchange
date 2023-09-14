<?php

namespace App\Models;

use CodeIgniter\Model;

class klub extends Model
{
    protected $table = 'club';
    protected $primaryKey = 'id';
    protected $allowedFields = [ 'name_club','league'];
}
