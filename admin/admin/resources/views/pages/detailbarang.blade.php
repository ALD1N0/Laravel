@extends('mainlayouta')

@section('maincontent')


<div class="detail-container">
    <div class="left">
        <div class="image-preview">
            <img src="gambar/helm.jpeg" alt="Helm KYT">
        </div>
        <div class="action-buttons">
            <button>Hapus Barang</button>
            <button class="back-button" onclick="history.back()">⬅️ Kembali</button>
        </div>
    </div>

    <div class="right">
        <h2>Jual Helm KYT Cross</h2>
        <h3 style="color: red;">Rp. 500.000</h3>
        <h4>Deskripsi Produk</h4>
        <p>Helm KYT Cross, pemakaian 7 bulan, kondisi mulus seperti baru. Cocok untuk motor trail/adventure. Bonus kaca helm.</p>
        <h4>Alamat Toko</h4>
        <p>Boyolali</p>
        <h4>Penjual</h4>
        <p>Gemilang Abadi ⭐⭐⭐⭐ (4.0)</p>
    </div>
</div>




@endsection
