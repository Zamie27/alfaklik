<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CartModel;
use App\Models\BarangModel;
use App\Models\BannerModel;

class User extends BaseController
{
    // Fungsi index Pelanggan
    public function pelanggan_home()
    {
        $model = new BarangModel();
        $bannerModel = new BannerModel();

        $data['barang'] = $model->findAll();
        $data['banners'] = $bannerModel->findAll();

        return view('users/pelanggan/dashboard', $data);
    }

    // Fungsi melihat detail barang
    public function detail_barang($id)
    {
        $model = new BarangModel();
        $data['barang'] = $model->find($id);

        if (!$data['barang']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Barang tidak ditemukan.');
        }

        return view('users/pelanggan/detail_barang', $data);
    }



    // Fungsi menambahkan barang ke Keranjang
    // public function addToCart()
    // {
    //     if ($this->request->isAJAX()) {
    //         $cartModel = new \App\Models\CartModel();
    //         $barangModel = new \App\Models\BarangModel();

    //         $data = $this->request->getPost();

    //         // Debug input
    //         log_message('debug', 'Data diterima: ' . json_encode($data));

    //         $userId = session()->get('id_pengguna');

    //         // Debug user ID
    //         if (!$userId) {
    //             log_message('error', 'ID pengguna tidak ditemukan di session');
    //             return $this->response->setJSON(['status' => 'error', 'message' => 'Pengguna tidak login.']);
    //         }

    //         // Validasi input
    //         if (!isset($data['id_barang']) || !is_numeric($data['id_barang'])) {
    //             log_message('error', 'ID barang tidak valid');
    //             return $this->response->setJSON(['status' => 'error', 'message' => 'ID barang tidak valid.']);
    //         }

    //         $barang = $barangModel->find($data['id_barang']);
    //         if (!$barang) {
    //             log_message('error', 'Barang tidak ditemukan: ID ' . $data['id_barang']);
    //             return $this->response->setJSON(['status' => 'error', 'message' => 'Barang tidak ditemukan.']);
    //         }

    //         // Simpan ke keranjang
    //         $existingCartItem = $cartModel
    //             ->where('id_pengguna', $userId)
    //             ->where('id_barang', $data['id_barang'])
    //             ->first();

    //         if ($existingCartItem) {
    //             $cartModel->update($existingCartItem['id_keranjang'], [
    //                 'jumlah' => $existingCartItem['jumlah'] + 1,
    //             ]);
    //         } else {
    //             $cartModel->insert([
    //                 'id_pengguna' => $userId,
    //                 'id_barang' => $data['id_barang'],
    //                 'jumlah' => 1,
    //             ]);
    //         }

    //         return $this->response->setJSON(['status' => 'success', 'message' => 'Barang berhasil ditambahkan ke keranjang.']);
    //     }

    //     return redirect()->to('/');
    // }

    // Before req Login
    // After without login
    public function addToCart()
    {
        if ($this->request->isAJAX()) { // Pastikan request adalah AJAX
            $cartModel = new CartModel();
            $barangModel = new BarangModel();

            // Ambil data dari request
            $data = $this->request->getPost();
            $userId = session()->get('id_pengguna') ?? 1; // Gunakan dummy user ID jika pengguna tidak login

            // Validasi input ID barang
            if (!isset($data['id_barang']) || !is_numeric($data['id_barang'])) {
                log_message('error', 'ID barang tidak valid atau tidak ditemukan.');
                return $this->response->setJSON(['status' => 'error', 'message' => 'ID barang tidak valid.']);
            }

            // Periksa apakah barang tersedia di database
            $barang = $barangModel->find($data['id_barang']);
            if (!$barang) {
                log_message('error', 'Barang tidak ditemukan. ID: ' . $data['id_barang']);
                return $this->response->setJSON(['status' => 'error', 'message' => 'Barang tidak ditemukan.']);
            }

            // Periksa apakah barang sudah ada di keranjang
            $existingCartItem = $cartModel
                ->where('id_pengguna', $userId)
                ->where('id_barang', $data['id_barang'])
                ->first();

            if ($existingCartItem) {
                // Jika barang sudah ada di keranjang, tambahkan jumlahnya
                $cartModel->update($existingCartItem['id_keranjang'], [
                    'jumlah' => $existingCartItem['jumlah'] + 1,
                ]);
                log_message('debug', 'Barang sudah ada di keranjang. Jumlah diperbarui.');
            } else {
                // Jika barang belum ada, tambahkan sebagai item baru
                $cartModel->insert([
                    'id_pengguna' => $userId,
                    'id_barang' => $data['id_barang'],
                    'jumlah' => 1,
                ]);
                log_message('debug', 'Barang berhasil ditambahkan ke keranjang.');
            }

            return $this->response->setJSON(['status' => 'success', 'message' => 'Barang berhasil ditambahkan ke keranjang.']);
        }

        // Jika bukan request AJAX, redirect ke halaman utama
        return redirect()->to('/');
    }


    // Fungsi Keranjang Pelanggan
    public function pelanggan_cart()
    {
        $cartModel = new CartModel();

        // Simulasi ID pengguna, sesuaikan dengan mekanisme autentikasi Anda
        $userId = session()->get('id_pengguna'); // Ambil ID pengguna dari session

        // Ambil data keranjang dan ringkasan total
        $cartItems = $cartModel->getCartItems($userId);
        $totalItems = $cartModel->getTotalItems($userId);
        $totalPrice = $cartModel->getTotalPrice($userId);

        // Kirim data ke view
        return view('users/pelanggan/keranjang', [
            'cartItems' => $cartItems,
            'totalItems' => $totalItems,
            'totalPrice' => $totalPrice
        ]);
    }

    // Fungsi Update Keranjang Pelanggan
    public function pelanggan_cartupdate()
    {
        $cartModel = new CartModel();

        // Ambil data dari request
        $cartId = $this->request->getPost('id_keranjang');
        $jumlah = (int) $this->request->getPost('jumlah');

        if ($jumlah <= 0) {
            $cartModel->delete($cartId); // Hapus item jika jumlahnya <= 0
            return redirect()->to('/pelanggan/cart')->with('message', 'Barang dihapus dari keranjang');
        }

        // Validasi jumlah barang
        if ($jumlah < 1) {
            return redirect()->to('/pelanggan/cart')->with('error', 'Jumlah barang tidak valid');
        }

        // Update jumlah barang
        $cartModel->update($cartId, ['jumlah' => $jumlah]);

        return redirect()->to('/pelanggan/cart')->with('message', 'Jumlah barang diperbarui');
    }


    // Fungsi Hapus Keranjang Pelanggan
    public function clearCart()
    {
        $cartModel = new CartModel();

        // Simulasi ID pengguna, sesuaikan dengan mekanisme autentikasi Anda
        $userId = session()->get('id_pengguna'); // Ambil ID pengguna dari session

        // Hapus semua barang dari keranjang untuk pengguna ini
        $cartModel->where('id_pengguna', $userId)->delete();

        return $this->response->setJSON(['status' => 'success', 'message' => 'Keranjang berhasil dikosongkan.']);
    }
}
