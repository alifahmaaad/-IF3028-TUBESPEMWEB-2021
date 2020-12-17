<?php

namespace App\Controllers;

use App\Models\lapor_Model;

class lapor extends BaseController
{

    public function index()
    {
        $model = new lapor_Model();
        $data = [
            'getdata' =>  $model->findAll(),
            'title'     => "Buat Laporan",
        ];

        //echo print_r($data);

        return view('lapor', $data);
    }

    public function simpanData()
    {
        $lapor_model = new lapor_model();
        if ($this->request->isAJAX()) {
            $data = [
                'laporan' => $this->request->getVar('laporan'),
                'aspek'    => $this->request->getVar('aspek'),
                'lampiran'    => $this->request->getVar('lampiran')
            ];

            $simpan = $lapor_model->inputData($data);
            if ($simpan) {
                $this->output['sukses'] = true;
                $this->output['pesan']  = 'Data ditemukan';
            }

            echo json_encode($this->output);
        }
    }
    public function detail($id)
    {
        $lapor_model = new lapor_model();
        $data['datalapor'] =  $lapor_model->getdetail($id)->getRow();
        $data['title'] = "Detail Laporan";
        return view('detail', $data);
    }
    public function hapus($id)
    {
        $lapor_model = new lapor_model();
        $lapor_model->hapus($id);
        return redirect()->to('/lapor');
    }
}
