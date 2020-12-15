<?php

namespace App\Controllers;

use App\Models\buat_Model;

class buat extends BaseController
{
    public function index()
    {
        $buatmodel = new buat_Model();
        $test = $buatmodel->findAll();
        echo print_r($test);

        return view('buat');
    }

    //--------------------------------------------------------------------

}
