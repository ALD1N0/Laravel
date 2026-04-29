
let cart = {};
let total = 0;

// =======================
// TAMBAH BARANG
// =======================
function tambahBarang(el, id, nama, harga, stok) {

    let card = el.closest(".card");
    let stokEl = card.querySelector(".stok");

    let currentStok = parseInt(stokEl.getAttribute("data-stok"));

    if (currentStok <= 0) {
        alert("Stok habis!");
        return;
    }

    // kurangi stok UI
    currentStok--;
    stokEl.setAttribute("data-stok", currentStok);
    stokEl.innerText = "Stok: " + currentStok;

    if (currentStok === 0) {
        el.disabled = true;
        el.innerText = "Habis";
    }

    // simpan ke cart pakai ID
    if (cart[id]) {
        cart[id].qty += 1;
    } else {
        cart[id] = {
            id_barang: id,
            nama: nama,
            harga: harga,
            qty: 1,
            el: el,
            stokEl: stokEl
        };
    }

    renderCart();
}

// =======================
// TAMBAH QTY (➕)
// =======================
function tambahQty(id) {

    let item = cart[id];
    let currentStok = parseInt(item.stokEl.getAttribute("data-stok"));

    if (currentStok <= 0) {
        alert("Stok habis!");
        return;
    }

    currentStok--;
    item.stokEl.setAttribute("data-stok", currentStok);
    item.stokEl.innerText = "Stok: " + currentStok;

    item.qty += 1;

    if (currentStok === 0) {
        item.el.disabled = true;
        item.el.innerText = "Habis";
    }

    renderCart();
}

// =======================
// KURANG QTY (➖)
// =======================
function kurangQty(id) {

    let item = cart[id];

    let currentStok = parseInt(item.stokEl.getAttribute("data-stok"));

    currentStok++;
    item.stokEl.setAttribute("data-stok", currentStok);
    item.stokEl.innerText = "Stok: " + currentStok;

    item.el.disabled = false;
    item.el.innerText = "Add";

    item.qty--;

    if (item.qty <= 0) {
        delete cart[id];
    }

    renderCart();
}

// =======================
// RENDER CART
// =======================
function renderCart() {
    const table = document.getElementById("listBarang");
    table.innerHTML = "";

    total = 0;

    for (let id in cart) {
        let item = cart[id];
        let subtotal = item.harga * item.qty;
        total += subtotal;

        const row = document.createElement("tr");

        row.innerHTML = `
            <td>${item.nama}</td>
            <td>
                <button onclick="kurangQty(${id})">➖</button>
                ${item.qty}
                <button onclick="tambahQty(${id})">➕</button>
            </td>
            <td>Rp ${subtotal}</td>
        `;

        table.appendChild(row);
    }

    document.getElementById("total").innerText = total;
}

function cariProdukTabel() {
    let input = document.getElementById("searchProduk").value.toLowerCase();

    // ambil semua baris tabel (kecuali header)
    let rows = document.querySelectorAll("#tabelProduk tr");

    rows.forEach((row, index) => {
        if (index === 0) return; // skip header

        let namaEl = row.querySelector(".nama-produk");
        if (!namaEl) return;

        let nama = namaEl.innerText.toLowerCase();

        if (nama.includes(input)) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}
function cariProduk() {
    let input = document.getElementById("searchInput").value.toLowerCase();
    let cards = document.querySelectorAll(".card");
    cards.forEach(card => {
        let nama = card.querySelector(".nama").innerText.toLowerCase();
        if (nama.includes(input)) {
            card.style.display = "block";
        } else { card.style.display = "none"; }
    });
}
async function checkout() {

    if (Object.keys(cart).length === 0) {
        alert("Keranjang kosong!");
        return;
    }

    let items = "";
    let dataItems = "";

    for (let id in cart) {
        let item = cart[id];
        let subtotal = item.harga * item.qty;

        items += `
        <tr>
            <td>${item.nama} x${item.qty}</td>
            <td style="text-align:right;">Rp ${subtotal}</td>
        </tr>
        `;

        dataItems += `${item.nama} x${item.qty} = Rp ${subtotal}\n`;
    }

    // TAMPILKAN STRUK DI HALAMAN
    let strukHTML = `
        <h3 style="text-align:center;">MAREM STORE</h3>
        <p style="text-align:center; font-size:12px;">
            ${new Date().toLocaleString()}
        </p>

        <table style="width:100%; font-size:12px;">
            ${items}
        </table>

        <hr>

        <h4>Total: Rp ${total}</h4>

        <p style="text-align:center;">Terima kasih 🙏</p>

        <button onclick="printStruk()" style="width:100%; margin-top:10px;">
            Print
        </button>

        <button onclick="kembaliKeCart()" style="width:100%; margin-top:5px;">
            Kembali
        </button>
    `;

    document.getElementById("cartView").style.display = "none";
    document.getElementById("strukView").style.display = "block";
    document.getElementById("strukView").innerHTML = strukHTML;

    // SIMPAN KE SERVER
    let itemsData = [];

    for (let id in cart) {
        let item = cart[id];

        itemsData.push({
            id_barang: item.id_barang,
            jumlah: item.qty,
            subtotal: item.harga * item.qty
        });
    }

    await fetch('/transaksi', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            items: itemsData,
            total: total
        })
    });

    // reset cart
    cart = {};
    renderCart();
}
function formatRupiah(angka) {
    return angka.toLocaleString('id-ID');
}
function printStruk() {
    window.print();
}
function kembaliKeCart() {
    document.getElementById("strukView").style.display = "none";
    document.getElementById("cartView").style.display = "block";
}

function printTransaksi(id) {
    let content = document.getElementById("transaksi-" + id).innerHTML;

    let win = window.open('', '', 'width=300,height=600');
    win.document.write(`
        <html>
        <head>
        <style>
        body { font-family: monospace; padding:10px; }
        table { width:100%; font-size:12px; border-collapse: collapse; }
        td, th { padding:5px; border-bottom:1px solid #ccc; }
        h3 { text-align:center; }
        </style>
        </head>
        <body>
            <h3>MAREM STORE</h3>
            ${content}
        </body>
        </html>
    `);
    win.document.close();
    win.print();
}

function printSemua() {
    let content = document.querySelector(".content-print").innerHTML;

    let win = window.open('', '', 'width=300,height=600');
    win.document.write(`
        <html>
        <head>
        <style>
        body { font-family: monospace; padding:10px; }
        table { width:100%; font-size:12px; border-collapse: collapse; }
        td, th { padding:5px; border-bottom:1px solid #ccc; }
        h3 { text-align:center; }
        </style>
        </head>
        <body>
            <h3>LAPORAN TRANSAKSI</h3>
            ${content}
        </body>
        </html>
    `);
    win.document.close();
    win.print();
}

 function filterProduk() {
        let filter = document.getElementById("filterProduk").value;
        let grid = document.getElementById("produkGrid");

        // ambil semua card
        let cards = Array.from(grid.querySelectorAll(".card"));

        // sorting
        if (filter === "nama") {
            cards.sort(function (a, b) {
                let namaA = a.querySelector(".nama").textContent.toLowerCase();
                let namaB = b.querySelector(".nama").textContent.toLowerCase();
                return namaA.localeCompare(namaB);
            });
        }
        else if (filter === "stok") {
            cards.sort(function (a, b) {
                let stokA = parseInt(a.querySelector(".stok").getAttribute("data-stok"));
                let stokB = parseInt(b.querySelector(".stok").getAttribute("data-stok"));
                return stokA - stokB;
            });
        }

        // kosongkan grid dulu (ini penting)
        grid.innerHTML = "";

        // masukkan ulang sesuai urutan baru
        cards.forEach(function (card) {
            grid.appendChild(card);
        });
    }
    function printStokHabis() {
    let table = document.getElementById("tabelProduk");
    let rows = Array.from(table.rows).slice(1); // skip header

    let data = "";

    rows.forEach(row => {
        let stok = parseInt(row.cells[3].innerText);

        if (stok <= 0) {
            data += `
                <tr>
                    <td>${row.cells[0].innerText}</td>
                    <td>${row.cells[2].innerText}</td>
                    <td>${row.cells[3].innerText}</td>
                </tr>
            `;
        }
    });

    let printWindow = window.open('', '', 'width=800,height=600');

    printWindow.document.write(`
        <html>
        <head>
            <title>Cetak Stok Habis</title>
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: left;
                }
            </style>
        </head>
        <body>
            <h2>Daftar Produk Stok Habis</h2>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
                ${data || '<tr><td colspan="3">Tidak ada stok habis</td></tr>'}
            </table>
        </body>
        </html>
    `);

    printWindow.document.close();
    printWindow.print();
}
