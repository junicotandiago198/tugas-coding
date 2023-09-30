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
        <a href="{{ route('backsite.dashboard-jenis-barang.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Backend</a>
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
          <a href="/" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Beranda</a>
        </li>
        <li>
          <a href="/penjualan" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Penjualan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container mx-auto p-6 mt-20">
      <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          <input type="search" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Silahkan Cari Products Berdasarkan Nama..." required>
      </div>

      <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 class="text-2xl font-bold tracking-tight text-gray-900">LIST PRODUCTS / BARANG </h2>
      
          <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8" id="product-list">
          </div>
          
        </div>
      </div>
  </div>
</body>

<script>
  const callProducts = async () => {
    try {
      const response = await fetch('/api/products');
      const data = await response.json();
      const content = document.querySelector('#product-list');
      const searchInput = document.querySelector('#search');

      const filterProducts = (query) => {
        return data.filter((item) => {
          return item.name.toLowerCase().includes(query.toLowerCase()) ||
            item.category.name.toLowerCase().includes(query.toLowerCase());
        });
      };

      const displayProducts = (items) => {
        content.innerHTML = '';
        items.forEach((item) => {
          const products = document.createElement('div');
          products.innerHTML = `
          <div class="group relative">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
              <img src="foto.jpg" alt="Foto" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    ${item.name}
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Jenis Barang : ${item.category.name}</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Stok : ${item.stok}</p>
            </div>
          </div>
          <div class="mt-2 flex justify-end">
            <button data-product-id="${item.id}" class="buy-button px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Beli</button>
          </div>`;
          content.appendChild(products);

          const buyButton = products.querySelector('button');
          buyButton.addEventListener('click', () => {
            const productId = buyButton.getAttribute('data-product-id');
            purchaseProduct(productId);
          });
        });
      };

      const purchaseProduct = async (productId) => {
        try {
          const response = await fetch(`/api/products/${productId}`, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
          });

          if (response.ok) {
            console.log('Produk berhasil dibeli');
          } else {
            console.error('Gagal membeli produk');
          }
        } catch (error) {
          console.error('Error:', error);
        }
      };

      searchInput.addEventListener('input', (e) => {
        const query = e.target.value.trim();
        const filteredData = filterProducts(query);
        displayProducts(filteredData);
      });

      displayProducts(data);
    } catch (error) {
      console.error('Gagal fetching data:', error);
    }
  }

  callProducts();
</script>
</html>
