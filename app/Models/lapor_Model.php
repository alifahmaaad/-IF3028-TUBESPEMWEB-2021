<?php

namespace App\Models;

use CodeIgniter\Model;

class lapor_Model extends Model
{
    public $db;
    public $builder;
    protected $table      = 'laporan';
    protected $primaryKey = 'id';

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }
    public function inputData($data)
    {
        $this->builder = $this->db->table($this->table);
        return $this->builder->insert($data);
    }
    public function getdetail($id)
    {
        return $this->getWhere(['id' => $id]);
    }
    public function hapus($id)
    {
        return $this->delete($id);
        // getWhere(['id' => $id]);
    }
}
