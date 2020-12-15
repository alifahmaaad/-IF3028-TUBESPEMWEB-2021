<?php

namespace App\Models;

use CodeIgniter\Model;

class detail_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    protected $table      = 'lapor';
    protected $primaryKey = 'id';
}
