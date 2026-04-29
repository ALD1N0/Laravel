@extends('mainlayoutb')

@section('maincontent')

    <div class="main-content">
        <div class="sticky-top">
            <h2>Bantuan</h2>
            <div class="search">
                <input type="text" placeholder="Cari bantuan...">
            </div>
        </div>

        <div style="padding: 100px 20px 40px 20px;">

        <section style="margin-top: 40px;">
                <h2>Pertanyaan Umum (FAQ)</h2>
                <p><strong>Q:</strong> Apakah saya harus membuat akun untuk membeli barang?<br>
                <strong>A:</strong> Ya, Anda harus memiliki akun agar dapat melakukan pembelian.</p>

                <p><strong>Q:</strong> Apakah barang yang dijual dijamin kualitasnya?<br>
                <strong>A:</strong> Kami hanya menyediakan platform, pastikan Anda memeriksa deskripsi barang dan reputasi penjual sebelum membeli.</p>
            </section>

            <section style="margin-top: 40px;">
                <h2>Cara Menjual Barang</h2>
                <ol>
                    <li>Daftar atau masuk ke akun Anda.</li>
                    <li>Buka menu “Jual Barang”.</li>
                    <li>Isi detail barang seperti foto, deskripsi, harga, dan kondisi.</li>
                    <li>Publikasikan barang Anda dan tunggu pembeli menghubungi Anda.</li>
                </ol>
            </section>

            <section style="margin-top: 40px;">
                <h2>Cara Membeli Barang</h2>
                <ol>
                    <li>Masuk ke akun Anda.</li>
                    <li>Telusuri barang yang diinginkan melalui fitur pencarian atau kategori.</li>
                    <li>Hubungi penjual untuk menanyakan detail atau langsung lakukan pembelian.</li>
                    <li>Pastikan untuk memeriksa barang sebelum melakukan pembayaran.</li>
                </ol>
            </section>

            <section style="margin-top: 40px;">
                <h2>Kontak Bantuan</h2>
                <ul>
                    <li>Email: bantuan@secondmarket.com</li>
                    <li>Telepon: +62 812-3456-7890</li>
                    <li>Chat: Gunakan fitur live chat di pojok kanan bawah website.</li>
                </ul>
            </section>
        </div>
    </div>

</body>
</html>

@endsection