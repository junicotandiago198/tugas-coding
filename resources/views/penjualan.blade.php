<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Daftar Produk Terjual</title>
</head>
<body class="font-sans">
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sistem Penjualan</span>
        </a>
        <div class="flex md:order-2">
            <a href="/" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Backend</a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                </li>
                <li>
                    <a href="/penjualan" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Penjualan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mx-auto p-6">

    <h1 class="text-2xl font-semibold mb-4">Daftar Produk Terjual</h1>

    <!-- Filter dan Pencarian -->
    <div class="mb-4 flex items-center justify-between mt-10">
        <!-- Pencarian -->
        <input type="text" id="search" class="w-1/3 px-3 py-2 border rounded-md mr-2" placeholder="Cari nama barang">
        
        <!-- Pengurutan -->
        <select id="sort" class="px-3 py-2 border rounded-md mr-2">
            <option value="default" disabled selected>Filter berdasarkan</option>
            <option value="nama_barang_asc">Nama Barang (A-Z)</option>
            <option value="nama_barang_desc">Nama Barang (Z-A)</option>
            <option value="tanggal_transaksi_asc">Tanggal Transaksi (Terlama)</option>
            <option value="tanggal_transaksi_desc">Tanggal Transaksi (Terbaru)</option>
        </select>
        
        <!-- Jenis Perbandingan -->
        <select id="comparisonType" class="px-3 py-2 border rounded-md mr-2">
            <option value="default" disabled selected>Filter Data Transaksi Terbanyak/Terendah</option>
            <option value="terbanyak">Terbanyak</option>
            <option value="terendah">Terendah</option>
        </select>

        <button class="bg-blue-500 text-white px-4 py-2 rounded-md" onclick="applyFilters()">Fillter Product</button>
    </div>

    <h2 class="text-2xl font-bold tracking-tight text-gray-900 m-8">LIST PRODUCTS / BARANG TERJUAL </h2>

    {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="product-list">
    </div> --}}
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg" id="product-list">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Product
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah Terjual
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Transaksi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Barang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stok
                    </th>
                </tr>
            </thead>
            <tbody id="product-list-body">
                <!-- Data produk akan ditambahkan ke sini -->
            </tbody>
        </table>
    </div>    
</div>

<script>
    let productsData = []; // Data penjualan

    function renderProducts(data) {
        const productListBody = document.getElementById('product-list-body');
        productListBody.innerHTML = '';

        data.forEach((product) => {
            const productRow = document.createElement('tr');
            productRow.className = 'bg-white border-b dark:bg-gray-900 dark:border-gray-700';

            const tanggalTerformat = new Date(product.tanggal_transaksi).toLocaleDateString('id-ID');

            productRow.innerHTML = `
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ${product.product.name}
                </th>
                <td class="px-6 py-4">
                    ${product.jumlah_terjual}
                </td>
                <td class="px-6 py-4">
                    ${tanggalTerformat}
                </td>
                <td class="px-6 py-4">
                    ${product.product.category.name}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500">${product.product.stok}</a>
                </td>
            `;
            productListBody.appendChild(productRow);
        });
    }


    function applyFilters() {
        const sortValue = document.getElementById('sort').value;
        const comparisonTypeValue = document.getElementById('comparisonType').value;
        const searchQuery = document.getElementById('search').value.trim();

        let filteredData = [...productsData]; 

        if (searchQuery) {
            filteredData = filteredData.filter((product) =>
                product.product.name.toLowerCase().includes(searchQuery.toLowerCase())
            );
        }

        if (sortValue === 'nama_barang_asc') {
            filteredData.sort((a, b) => a.product.name.localeCompare(b.product.name));
        } else if (sortValue === 'nama_barang_desc') {
            filteredData.sort((a, b) => b.product.name.localeCompare(a.product.name));
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
        applyFilters();
    });

    fetch('/api/penjualan')
        .then((response) => {
            if (!response.ok) {
                throw new Error('Gagal Terjadi masalah dengan koneksi jaringan');
            }
            return response.json();
        })
        .then((data) => {
            productsData = data;
            renderProducts(data);
        })
        .catch((error) => {
            console.error('Gagal mengambil data', error);
        });
</script>
</body>
</html>