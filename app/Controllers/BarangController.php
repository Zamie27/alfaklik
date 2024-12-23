<?php

namespace App\Controllers;

use App\Models\BarangModel;

class BarangController extends BaseController
{
    public function katalog()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();

        return view('katalog', $data);
    }
}
