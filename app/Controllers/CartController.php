<?php

namespace App\Controllers;

use App\Models\CartModel;

class CartController extends BaseController
{
    public function index()
    {
        $cartModel = new CartModel();

        // Simulasi ID pengguna, sesuaikan dengan mekanisme autentikasi Anda
        $userId = session()->get('id_pengguna');

        // Ambil data keranjang dan ringkasan total
        $cartItems = $cartModel->getCartItems($userId);
        $totalItems = $cartModel->getTotalItems($userId);
        $totalPrice = $cartModel->getTotalPrice($userId);

        // Kirim data ke view
        return view('cart', [
            'cartItems' => $cartItems,
            'totalItems' => $totalItems,
            'totalPrice' => $totalPrice
        ]);
    }

    public function update()
    {
        $cartModel = new CartModel();

        // Ambil data dari request
        $cartId = $this->request->getPost('id_keranjang');
        $jumlah = $this->request->getPost('jumlah');

        if ($jumlah <= 0) {
            $cartModel->delete($cartId); // Hapus item jika jumlahnya <= 0
            return redirect()->to('/cart')->with('message', 'Barang dihapus dari keranjang');
        }

        // Update jumlah barang
        $cartModel->update($cartId, ['jumlah' => $jumlah]);

        return redirect()->to('/cart')->with('message', 'Jumlah barang diperbarui');
    }
}
