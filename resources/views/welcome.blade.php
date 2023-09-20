<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Daftar Produk Terjual</title>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto p-6">

        <h1 class="text-2xl font-semibold mb-4">Daftar Produk Terjual</h1>

        <!-- Filter dan Pencarian -->
        <div class="mb-4 flex items-center justify">
            <!-- Pencarian -->
            <input type="text" id="search" class="w-1/3 px-3 py-2 border rounded-md" placeholder="Cari nama barang">
            
            <!-- Pengurutan -->
            <select id="sort" class="px-3 py-2 border rounded-md">
                <option value="default" disabled selected>Fillter berdasarkan</option>
                <option value="nama_barang_asc">Nama Barang (A-Z)</option>
                <option value="nama_barang_desc">Nama Barang (Z-A)</option>
                <option value="tanggal_transaksi_asc">Tanggal Transaksi (Terlama)</option>
                <option value="tanggal_transaksi_desc">Tanggal Transaksi (Terbaru)</option>
            </select>
            
            <!-- Jenis Perbandingan -->
            <select id="comparisonType" class="px-3 py-2 border rounded-md">
                <option value="default" disabled selected>Fillter Data Transaksi Terbanyak/Terendah </option>
                <option value="terbanyak">Terbanyak</option>
                <option value="terendah">Terendah</option>
            </select>

            <button class="bg-blue-500 text-white px-4 py-2 rounded-md m-2" onclick="applyFilters()">Cari Berdasarkan Filter</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="product-list">
        </div>
    </div>

    <script>
        let productsData = []; // Data penjualan

        function renderProducts(data) {
            const productList = document.getElementById('product-list');
            productList.innerHTML = '';

            data.forEach((product) => {
                const productCard = document.createElement('div');
                productCard.className = 'bg-white rounded-lg shadow-md p-4';
                productCard.innerHTML = `
                    <h2 class="text-lg font-semibold mb-2">${product.nama_barang}</h2>
                    <p class="text-gray-600 text-sm mb-2">Jumlah Terjual: ${product.jumlah_terjual}</p>
                    <p class="text-gray-600 text-sm mb-2">Tanggal Transaksi: ${product.tanggal_transaksi}</p>
                    <p class="text-gray-600 text-sm">Jenis Produk: ${product.jenis_barang}</p>
                `;
                productList.appendChild(productCard);
            });
        }

        function applyFilters() {
            const sortValue = document.getElementById('sort').value;
            const comparisonTypeValue = document.getElementById('comparisonType').value;
            const searchQuery = document.getElementById('search').value.trim();

            let filteredData = [...productsData]; 

            if (searchQuery) {
                filteredData = filteredData.filter((product) =>
                    product.nama_barang.toLowerCase().includes(searchQuery.toLowerCase())
                );
            }

        
            if (sortValue === 'nama_barang_asc') {
                filteredData.sort((a, b) => a.nama_barang.localeCompare(b.nama_barang));
            } else if (sortValue === 'nama_barang_desc') {
                filteredData.sort((a, b) => b.nama_barang.localeCompare(a.nama_barang));
            } else if (sortValue === 'tanggal_transaksi_asc') {
                filteredData.sort((a, b) => a.tanggal_transaksi.localeCompare(b.tanggal_transaksi));
            } else if (sortValue === 'tanggal_transaksi_desc') {
                filteredData.sort((a, b) => b.tanggal_transaksi.localeCompare(a.tanggal_transaksi));
            }

            
            if (comparisonTypeValue === 'terbanyak') {
                filteredData.sort((a, b) => b.jumlah_terjual - a.jumlah_terjual);
            } else if (comparisonTypeValue === 'terendah') {
                filteredData.sort((a, b) => a.jumlah_terjual - b.jumlah_terjual);
            }

            
            renderProducts(filteredData);
        }

        const searchInput = document.getElementById('search');
        searchInput.addEventListener('input', () => {
            const searchQuery = searchInput.value.trim();
            applyFilters(); // Terapkan filter saat input berubah
        });

        fetch('/api/penjualan')
            .then((response) => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then((data) => {
                productsData = data;
                renderProducts(data);
            })
            .catch((error) => {
                console.error('There was a problem with the fetch operation:', error);
            });
    </script>
</body>
</html>
