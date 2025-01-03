<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['nama_barang', 'harga_barang', 'deskripsi_barang', 'gambar_barang', 'jumlah_stock'];
}
