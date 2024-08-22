<x-app-layout>


    <div x-data="{ isOpen: false }" class="flex">
        <!-- Sidebar -->
        <div :class="isOpen ? 'w-64' : 'w-16'" class="bg-gray-800 text-white h-screen transition-all duration-300 flex flex-col">
            <div class="p-4 flex items-center justify-between">
                <button @click="isOpen = !isOpen" class="focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <h3 x-show="isOpen" class="text-lg font-semibold ml-4 transition-opacity duration-300">Menu</h3>
            </div>
            <ul class="mt-4 flex-grow">
                <li class="mb-4">
                    <a href="{{ url('/master') }}" class="flex items-center p-3 hover:bg-gray-700 rounded transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 01-8 0m0 0V4m8 3v5.9A4.002 4.002 0 0012 19a4.002 4.002 0 01-4-4V8m0 0V4m0 4a4 4 0 108 0z" />
                        </svg>
                        <span x-show="isOpen" class="transition-opacity duration-300">Master</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ url('/transaksi') }}" class="flex items-center p-3 hover:bg-gray-700 rounded transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 110 4H7a2 2 0 010-4h10m-6-8h.01M9 4h.01M15 4h.01M9 16h.01M15 16h.01M9 20h.01M15 20h.01M12 4h.01M12 8h.01M12 12h.01M12 16h.01M12 20h.01" />
                        </svg>
                        <span x-show="isOpen" class="transition-opacity duration-300">Transaksi</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ url('/informasi') }}" class="flex items-center p-3 hover:bg-gray-700 rounded transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V6a5 5 0 00-10 0v3m12 0h.01M5 9h.01M7 20h10M7 20h10m-10 0a3 3 0 006 0" />
                        </svg>
                        <span x-show="isOpen" class="transition-opacity duration-300">Informasi</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ url('/laporan') }}" class="flex items-center p-3 hover:bg-gray-700 rounded transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-4a1 1 0 011-1h4a1 1 0 011 1v4m-1-10a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span x-show="isOpen" class="transition-opacity duration-300">Laporan</span>
                    </a>
                </li>
            </ul>
            <div class="p-4">
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">
                    Pengaturan
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 py-12 px-8 bg-gray-100">
            <div class="max-w-7xl mx-auto">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6 text-gray-900">
                        <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-md">
                                <h2 class="text-lg font-semibold">Pasien Terdaftar</h2>
                                <p class="mt-2 text-3xl">1,245</p>
                            </div>
                            <div class="bg-green-500 text-white p-4 rounded-lg shadow-md">
                                <h2 class="text-lg font-semibold">Transaksi Hari Ini</h2>
                                <p class="mt-2 text-3xl">523</p>
                            </div>
                            <div class="bg-yellow-500 text-white p-4 rounded-lg shadow-md">
                                <h2 class="text-lg font-semibold">Tagihan Belum Lunas</h2>
                                <p class="mt-2 text-3xl">45</p>
                            </div>
                            <div class="bg-red-500 text-white p-4 rounded-lg shadow-md">
                                <h2 class="text-lg font-semibold">Pendapatan Bulan Ini</h2>
                                <p class="mt-2 text-3xl">Rp 1.234.567</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
