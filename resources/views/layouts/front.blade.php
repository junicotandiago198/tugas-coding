<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <style>
      .custom-hero {
        position: relative;
        height: 480px;
      }
      .custom-hero img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
    <!-- Components TOP BAR -->
    <nav class="bg-white dark:bg-gray-900 z-20 top-0 left-0">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <button
          type="button"
          data-collapse-toggle="navbar-search"
          aria-controls="navbar-search"
          aria-expanded="false"
          class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1"
        >
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
          <span class="sr-only">Search</span>
        </button>
        <div class="relative hidden md:block">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span class="sr-only">Search icon</span>
          </div>
          <input
            type="text"
            id="search-navbar"
            class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="T-Shirt, Hoodie..."
          />
        </div>
        <div class="flex md:order-2">
          <a href="#" class="font-jakarta flex items-center hover:bg-gray-100 text-black font-bold text-sm px-4 py-2 mr-3 md:mr-0">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
            Sign In
          </a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="#" class="font-jakarta font-semibold block py-2 pl-3 pr-4 text-black text-2xl rounded md:bg-transparent" aria-current="page">Secret Enchante</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Garis horizontal -->
    <div class="border-t-4 border-black border-b-4 h-1"></div>

    <!-- Components Navigation Bar -->
    <nav class="bg-white dark:bg-gray-900 z-20 top-0 left-0 border-b border-t border-gray-200 dark:border-gray-600">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <button
          type="button"
          data-collapse-toggle="navbar-search"
          aria-controls="navbar-search"
          aria-expanded="false"
          class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1"
        >
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
          <span class="sr-only">Search</span>
        </button>
        <div class="relative hidden md:block">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span class="sr-only">Search icon</span>
          </div>
          <input
            type="text"
            id="search-navbar"
            class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="T-Shirt, Hoodie..."
          />
        </div>
        <div class="flex md:order-2">
          <a href="#" class="font-jakarta flex items-center text-black font-bold hover:bg-gray-100 text-sm px-4 py-2 mr-3 md:mr-0">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
              />
            </svg>
            Cart (0)
          </a>
          <button
            data-collapse-toggle="navbar-sticky"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-sticky"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <!-- List a Active -->
              <!-- <a href="#" class="font-jakarta block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">MEN</a> -->
              <a
                href="#"
                class="font-jakarta font-semibold block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-stone-200 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >MEN
              </a>
            </li>
            <li>
              <a
                href="#"
                class="font-jakarta font-semibold block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-stone-200 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >WOMEN</a
              >
            </li>
            <li>
              <a
                href="#"
                class="font-jakarta font-semibold block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-stone-200 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >BABY</a
              >
            </li>
            <li>
              <a
                href="#"
                class="font-jakarta font-semibold block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-stone-200 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >KIDS</a
              >
            </li>
            <li>
              <a
                href="#"
                class="font-jakarta font-semibold block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-stone-200 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >SPORT</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Components Hero Section Shop -->
    <section class="hero-section">
      <div class="custom-hero relative flex items-center justify-center object-">
        <img src="{{ asset('frontend/images/Banner.png') }}" alt="Product Image" class="w-full h-auto" />
        <!-- <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
          <h1 class="text-4xl font-bold mb-2">Blizer Series Only 349K</h1>
        </div> -->
      </div>
    </section>

    <!-- Components List Products -->
    <p class="font-jakarta text-2xl text-center font-extrabold mt-6">New Products</p>

    <section class="lg:mx-24 mx-4">
      <!-- Disini List Productnya -->
      <div class="flex justify-center">
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 w-full" id="content">
          <div class="flex-1 mt-6">
            <div class="bg-white">
              <img src="{{ asset('frontend/images/products/product-1.png') }}" alt="Produk 1" class="w-full h-auto" />
              <h2 class="font-jakarta text-lg mt-2">Enchanté Linen Shirt Yellow</h2>
              <p class="font-jakarta font-semibold text-black-600">Rp 279.900</p>
            </div>
          </div>
          {{-- <div class="flex-1 mt-6">
            <div class="bg-white">
              <img src="{{ asset('frontend/images/products/product-2.png') }}" alt="Produk 2" class="w-full h-auto" />
              <h2 class="font-jakarta text-lg mt-2">Suit Waitcoast Slim Fit</h2>
              <p class="font-jakarta font-semibold text-black-600">Rp 499.900</p>
            </div>
          </div>
          <div class="flex-1 mt-6">
            <div class="bg-white">
              <img src="{{ asset('frontend/images/products/product-3.png') }}" alt="Produk 3" class="w-full h-auto" />
              <h2 class="font-jakarta text-lg mt-2">NYC Hoodie Kids</h2>
              <p class="font-jakarta font-semibold text-black-600">Rp 379.900</p>
            </div>
          </div>
          <div class="flex-1 mt-6">
            <div class="bg-white">
              <img src="{{ asset('frontend/images/products/product-4.png') }}" alt="Produk 4" />
              <h2 class="font-jakarta text-lg mt-2">Ribbed Jersey Dress</h2>
              <p class="font-jakarta font-semibold text-black-600">Rp 199.900</p>
            </div>
          </div>
          <div class="flex-1 mt-6">
            <div class="bg-white">
              <img src="{{ asset('frontend/images/products/product-5.png') }}" alt="Produk 1" class="w-full h-auto" />
              <h2 class="font-jakarta text-lg mt-2">Oversized Fit Cotton T-shirt</h2>
              <p class="font-jakarta font-semibold text-black-600">Rp 199.900</p>
            </div>
          </div>
          <div class="flex-1 mt-6">
            <div class="bg-white">
              <img src="{{ asset('frontend/images/products/product-6.png') }}" alt="Produk 2" class="w-full h-auto" />
              <h2 class="font-jakarta text-lg mt-2">Cotton Bucket Hat</h2>
              <p class="font-jakarta font-semibold text-black-600">Rp 89.900</p>
            </div>
          </div>
          <div class="flex-1 mt-6">
            <div class="bg-white">
              <img src="{{ asset('frontend/images/products/product-7.png') }}" alt="Produk 3" class="w-full h-auto" />
              <h2 class="font-jakarta text-lg mt-2">Basic Shirt Top</h2>
              <p class="font-jakarta font-semibold text-black-600">Rp 149.900</p>
            </div>
          </div>
          <div class="flex-1 mt-6">
            <div class="bg-white">
              <img src="{{ asset('frontend/images/products/product-8.png') }}" alt="Produk 4" />
              <h2 class="font-jakarta text-lg mt-2">Amour de Paris Sweatshirt</h2>
              <p class="font-jakarta font-semibold text-black-600">Rp 529.900</p>
            </div>
          </div> --}}
        </div>
      </div>

      <!-- Components Customer Experience -->
      <p class="font-jakarta text-2xl text-center font-extrabold mt-24">We Provide Best Customer Experience</p>
      <div class="flex justify-center">
        <div class="grid grid-cols-2 gap-3 sm:grid-cols-4 p-4">
          <div class="relative flex flex-col mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-slate-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 rounded-lg bg-gray-100">
                <img src="{{ asset('frontend/icons/check-circle.png') }}" alt="" />
              </div>

              <h6 class="font-jakarta text-xl mb-1 font-semibold">Original Products</h6>
              <p class="font-jakarta mb-4 text-slate-500">We provide money back guarantee if the product are not original</p>
            </div>
          </div>

          <div class="relative flex flex-col mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-slate-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 rounded-lg bg-gray-100">
                <img src="{{ asset('frontend/icons/heart-hand.png') }}" alt="" />
              </div>

              <h6 class="font-jakarta text-xl mb-1 font-semibold">Satisfaction Guarantee</h6>
              <p class="font-jakarta mb-4 text-slate-500">We provide money back guarantee if the product are not original</p>
            </div>
          </div>

          <div class="relative flex flex-col mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-slate-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 rounded-lg bg-gray-100">
                <img src="{{ asset('frontend/icons/stars-01.png') }}" alt="" />
              </div>

              <h6 class="font-jakarta text-xl mb-1 font-semibold">New Arrival Every Week</h6>
              <p class="font-jakarta mb-4 text-slate-500">We provide money back guarantee if the product are not original</p>
            </div>
          </div>

          <div class="relative flex flex-col mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-slate-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 rounded-lg bg-gray-100">
                <img src="{{ asset('frontend/icons/rocket-02.png') }}" alt="" />
              </div>

              <h6 class="font-jakarta text-xl mb-1 font-semibold">Fast Shipping</h6>
              <p class="font-jakarta mb-4 text-slate-500">We provide money back guarantee if the product are not original</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Components Our Category -->
    <div class="bg-gray-300 p-6 mt-24">
      <p class="font-jakarta text-2xl text-center font-extrabold mt-6">OUR CATEGORY</p>
      <div class="flex flex-col md:flex-row mt-6">
        <div class="w-full md:w-1/3 p-2">
          <img src="{{ asset('frontend/images/products/product-category-men.png') }}" alt="Foto Pertama" class="w-full h-auto" />
        </div>
        <div class="w-full md:w-2/3 flex flex-col md:flex-row md:flex-wrap">
          <div class="p-2">
            <img src="{{ asset('frontend/images/products/product-category-women.png') }}" alt="Foto Kedua" class="w-full h-auto" />
          </div>
          <div class="w-full md:w-1/2 p-2">
            <img src="{{ asset('frontend/images/products/product-category-baby.png') }}" alt="Foto Kiri" class="w-full h-auto" />
          </div>
          <div class="w-full md:w-1/2 p-2">
            <img src="{{ asset('frontend/images/products/product-category-sport.png') }}" alt="Foto Bawah" class="w-full h-auto" />
          </div>
        </div>
      </div>
    </div>

    <!-- Components Footer -->
    <footer class="bg-black text-white py-8 mt-48">
      <div class="container mx-auto flex flex-wrap justify-between w-3/4">
        <div class="w-full md:w-1/4 mb-4 md:mb-0">
          <h2 class="font-jakarta text-2xl mb-2 font-semibold">Secret Enchante</h2>
          <p class="font-jakarta text-sm text-white">Selection of quality clothing with soft and comfortable materials for everyday style.</p>
        </div>
        <div class="w-full md:w-1/4 mb-4 md:mb-0">
          <h3 class="font-jakarta text-lg mb-2 font-semibold">HELP</h3>
          <ul class="font-jakarta text-sm">
            <li><a href="#">Exchange & Returns</a></li>
            <li class="mt-2"><a href="#">Payment Information</a></li>
            <li class="mt-2"><a href="#"></a>Track Your Order</li>
            <li class="mt-2"><a href="#">FAQs</a></li>
          </ul>
        </div>
        <div class="w-full md:w-1/4 mb-4 md:mb-0">
          <h3 class="font-jakarta text-lg mb-2 font-semibold">BUSINESS</h3>
          <ul class="font-jakarta text-sm">
            <li class="mt-2"><a href="#">About Us</a></li>
            <li class="mt-2"><a href="#">Pop-up Store</a></li>
            <li class="mt-2"><a href="#">Career</a></li>
            <li class="mt-2"><a href="#">News</a></li>
          </ul>
        </div>
        <div class="w-full md:w-1/4">
          <h3 class="font-jakarta text-lg font-semibold mb-2">Stay up to date</h3>
          <form class="mb-4 flex flex-col">
            <input type="email" class="font-jakarta bg-white-800 w-full px-3 py-2 rounded-md placeholder-gray-500 text-black focus:outline-none focus:ring focus:border-blue-300 mb-2 md:mb-0 mr-2" placeholder="Enter your email" />
            <button type="submit" class="font-jakarta font-semibold bg-orange-400 text-white px-3 py-2 rounded-md mt-3 hover:bg-stone-200 focus:outline-none focus:ring focus:border-blue-300 max-w-fit">Subscribe</button>
          </form>
        </div>
      </div>
      <hr class="w-3/4 h-0.5 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700" />
      <div class="font-jakarta container mx-auto flex justify-between items-center text-sm w-3/4">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
        <ul class="flex space-x-4">
          <li><a href="#" class="font-jakarta text-gray-300 hover:text-white">Terms</a></li>
          <li><a href="#" class="font-jakarta text-gray-300 hover:text-white">Privacy</a></li>
          <li><a href="#" class="font-jakarta text-gray-300 hover:text-white">Cookies</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>

<script>
  const callApi = async () => {
    try {
      const response = await fetch('/api/products');
      const data = await response.json();

      const content = document.querySelector('#content');

      data.forEach(item => {
        const cart = document.createElement('div');
        cart.innerHTML = `
          <div class="flex-1 mt-6">
            <div class="bg-white">
              <img src="{{ asset('${item.image[0].path}') }}" alt="Produk 1" class="w-full h-auto" />
              <h2 class="font-jakarta text-lg mt-2">${item.name}</h2>
              <p class="font-jakarta font-semibold text-black-600">Rp ${item.price}</p>
            </div>
          </div>`;
        content.appendChild(cart);
      });
    } catch (error) {
      console.error('Error fetching data:', error);
    }
  }

  callApi();
</script>


<!-- BERIKUT INI ADALAH JAVASCRIPTNYA UNTUK NAVBAR -->
<!-- <script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
    const navbarContent = document.querySelector('#navbar-sticky');

    if (toggleButton && navbarContent) {
      toggleButton.addEventListener('click', function () {
        const expanded = toggleButton.getAttribute('aria-expanded') === 'true' || false;
        toggleButton.setAttribute('aria-expanded', !expanded);
        navbarContent.classList.toggle('hidden', expanded);
      });
    }
  });
</script> -->
