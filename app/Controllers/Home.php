<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();

        return view('dashboard', $data);
    }

    public function logout()
    {
        // Hapus session pengguna
        service('authentication')->logout();

        // Redirect ke halaman login atau halaman lain
        return redirect()->to('/login');
    }
}
