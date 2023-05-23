<?php

namespace App\Models;

use CodeIgniter\Model;

class klub extends Model
{
    protected $table = 'twojklub';
    protected $primaryKey = 'id';
    protected $allowedFields = ['rok_zalozenia', 'menedzer', 'pracownicy', 'pilkarze'];
}
