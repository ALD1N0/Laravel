@extends('mainlayout')

@section('maincontent')


    <div style="padding: 100px 20px 40px 20px;">
      <h2>Produk</h2>
      <button class="add-product-form button" onclick="openModal()">TAMBAH PRODUK</button>

      <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead style="background: var(--primary-color); color: white;">
          <tr>
            <th style="padding: 10px;">No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Foto Produk</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr style="background: #fafafa; text-align: center;">
            <td>1</td>
            <td>Panarybody</td>
            <td>Rp145.000</td>
            <td><img src="produk1.jpg" alt="Foto" class="product-img" style="width: 80px; height: auto; border-radius: 4px;"></td>
            <td>
              <button class="add-product-form button" style="padding: 5px 10px; margin: 2px;">UBAH</button>
              <button class="add-product-form button" style="background: #dc3545; padding: 5px 10px; margin: 2px;">HAPUS</button>
            </td>
          </tr>
          <!-- Tambahkan produk lainnya di sini -->
        </tbody>
      </table>
    </div>

    <!-- MODAL -->
    <div class="modal" id="produkModal" style="display: none; position: fixed; z-index: 1001; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
      <div class="modal-content" style="background: white; margin: 10% auto; padding: 20px; border-radius: 8px; width: 400px; position: relative;">
        <span class="close" onclick="closeModal()" style="position: absolute; top: 10px; right: 20px; font-size: 24px; cursor: pointer;">&times;</span>
        <h3>Tambah Produk</h3>
        <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data" class="add-product-form">
          <label>Nama produk</label>
          <input type="text" name="nama_produk" required>

          <label>Deskripsi produk</label>
          <input type="text" name="deskripsi" required>

          <label>Harga produk</label>
          <input type="number" name="harga" required>

          <label>Foto produk</label>
          <input type="file" name="foto" accept="image/*" required>

          <button type="submit">TAMBAH PRODUK</button>
        </form>
      </div>
    </div>
  </main>

  <script>
    function openModal() {
      document.getElementById('produkModal').style.display = 'block';
    }
    function closeModal() {
      document.getElementById('produkModal').style.display = 'none';
    }
    window.onclick = function(event) {
      if (event.target == document.getElementById('produkModal')) {
        closeModal();
      }
    }
  </script>
</body>
</html>
@endsection