<section id="keranjang" style="width:30%; background:#ccc; padding:15px;">

    <!-- MODE CART -->
    <div id="cartView">
        <h3>LIST BARANG</h3>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody id="listBarang"></tbody>
        </table>

        <h4>Total: Rp <span id="total">0</span></h4>

        <button onclick="checkout()" style="width:100%; margin-top:10px;">
            Checkout & Cetak
        </button>
    </div>

    <!-- MODE STRUK -->
    <div id="strukView" style="display:none;"></div>

</section>