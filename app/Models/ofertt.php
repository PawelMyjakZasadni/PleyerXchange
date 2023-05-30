<?php

namespace App\Models;

use CodeIgniter\Model;

class ofertt extends Model
{
    protected $table = 'offers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['club_name', 'manager', 'price', 'rental_period', 'submitter'];
}
