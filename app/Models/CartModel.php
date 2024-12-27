<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'keranjang'; // Nama tabel di database
    protected $primaryKey = 'id_keranjang'; // Primary key tabel
    protected $allowedFields = ['id_pengguna', 'id_barang', 'jumlah']; // Kolom yang dapat diisi

    /**
     * Ambil item keranjang beserta detail barangnya untuk pengguna tertentu.
     */
    public function getCartItems($userId)
    {
        return $this->select('keranjang.*, barang.nama_barang, barang.harga_barang, barang.gambar_barang')
            ->join('barang', 'barang.id_barang = keranjang.id_barang')
            ->where('keranjang.id_pengguna', $userId)
            ->findAll();
    }

    /**
     * Hitung total jumlah barang di keranjang untuk pengguna tertentu.
     */
    public function getTotalItems($userId)
    {
        return $this->where('id_pengguna', $userId)
            ->selectSum('jumlah', 'total')
            ->get()
            ->getRow()
            ->total;
    }

    /**
     * Hitung total harga barang di keranjang untuk pengguna tertentu.
     */
    public function getTotalPrice($userId)
    {
        return $this->select('SUM(barang.harga_barang * keranjang.jumlah) as total_harga')
            ->join('barang', 'barang.id_barang = keranjang.id_barang')
            ->where('keranjang.id_pengguna', $userId)
            ->get()
            ->getRow()
            ->total_harga;
    }
}
