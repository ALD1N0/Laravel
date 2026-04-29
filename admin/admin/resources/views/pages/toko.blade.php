@extends('mainlayouta')

@section('maincontent')

<div class="main-content">
    <div class="profile-header">
        <img src="helm.jpeg" alt="Avatar" class="avatar-large">
        <div class="details">
            <h2>Gemilang Abadi</h2>
            <div>Rating Toko: <span class="rating">⭐⭐⭐⭐☆ (4)</span></div>
            <a href="#" style="color: var(--primary-color); font-weight: bold; text-decoration: none; margin-top: 5px;">Lihat Ulasan</a>
        </div>
    </div>

    <h3 style="margin-top: 30px;">Produk Dijual</h3>
    <div class="products">
      <a href="{{ route('detailbarang') }}" class="product-card">
        <img src="helm.jpeg" alt="">
        <div class="name">Jual Helm KYT</div>
        <div class="price">Rp.500</div>
        <div class="location">Teras</div>
      </a>
      <a href="{{ route('detailbarang') }}" class="product-card">
        <img src="trees.png" alt="">
        <div class="name">Little Trees</div>
        <div class="price">Rp.700</div>
        <div class="location">Gentan</div>
      </a>
      <a href="{{ route('detailbarang') }}" class="product-card">
        <img src="adibas.jpg" alt="">
        <div class="name">Sepatu Adibas</div>
        <div class="price">Rp.700</div>
        <div class="location">Kertonatan</div>
      </a>
      <a href="{{ route('detailbarang') }}" class="product-card">
        <img src="tiger.jpg" alt="">
        <div class="name">Spakbor Tiger Herek</div>
        <div class="price">Rp.500</div>
        <div class="location">Randusari</div>
      </a>
      <a href="{{ route('detailbarang') }}" class="product-card">
        <img src="fiber.jpg" alt="">
        <div class="name">Microfiber</div>
        <div class="price">Rp.500</div>
        <div class="location">Teras</div>
      </a>
    </div>

    <div class="section">
        <h3>Riwayat Pembelian</h3>
        <table>
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Helm KYT</td>
                    <td>01/05/2025</td>
                    <td>1</td>
                    <td>Selesai</td>
                </tr>
                <tr>
                    <td>Jaket Touring</td>
                    <td>28/04/2025</td>
                    <td>1</td>
                    <td>Selesai</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="section">
        <h3>Riwayat Penjualan</h3>
        <table>
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sarung Tangan</td>
                    <td>03/05/2025</td>
                    <td>2</td>
                    <td>Selesai</td>
                </tr>
                <tr>
                    <td>Helm KYT</td>
                    <td>02/05/2025</td>
                    <td>1</td>
                    <td>Dalam Proses</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
@endsection