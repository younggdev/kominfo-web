<header class="fixed z-50 w-full transition-all bg-[#0082e6] duration-500 text-white shadow-lg">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
            <div class="flex">
                <img src="img/kominfo_putih1.png" alt="" class="w-12 md:w-[4rem]" />
                <div class="ml-5">
                    <p>DINAS KOMUNIKASI DAN INFORMATIKA</p>
                    <p>KABUPATEN PURWAKARTA</p>
                </div>
            </div>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row dropnav transition-all duration-700 bg-[#0082e6]">
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php">Beranda</a>
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php?page=berita">Berita</a>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 mx-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>Layanan</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 bg-[#0082e6]">
                    <div class="px-2 py-2 rounded-md shadow dropnav2 transition-all duration-500 delay-100 bg-[#0082e6]">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#" data-te-toggle="modal" data-te-target="#modal1" data-te-ripple-init data-te-ripple-color="light">
                            Pengadaan Barang / Jasa Pemerintah</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#" data-te-toggle="modal" data-te-target="#modal2" data-te-ripple-init data-te-ripple-color="light">M-CAP</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#" data-te-toggle="modal" data-te-target="#modal3" data-te-ripple-init data-te-ripple-color="light">Pertunjukan Rakyat</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#" data-te-toggle="modal" data-te-target="#modal4" data-te-ripple-init data-te-ripple-color="light">Fasilitas WIFI</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#" data-te-toggle="modal" data-te-target="#modal5" data-te-ripple-init data-te-ripple-color="light">Leaflet</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#" data-te-toggle="modal" data-te-target="#modal6" data-te-ripple-init data-te-ripple-color="light">Media Sosial</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#" data-te-toggle="modal" data-te-target="#modal7" data-te-ripple-init data-te-ripple-color="light">Ruang Internet Publik</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#" data-te-toggle="modal" data-te-target="#modal8" data-te-ripple-init data-te-ripple-color="light">Internship / Praktek Kerja Lapangan</a>
                    </div>
                </div>
            </div>
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">TIM</a>
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php?page=galeri">Galeri</a>
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php#kontak">Kontak Kami</a>
        </nav>
    </div>
</header>
<!-- Navbar Ends -->

<!-- Content starts -->
<main class="pt-[80px]">
    <div class="py-5 px-10 lg:mb-2 bg-[#1773b9] text-white">
        <a href="">Beranda</a>
        <h2 class="text-2xl">Profil</h2>
    </div>
    <div class="mt-5">
        <h1 class="text-center text-xl font-bold">TIM KAMI</h1>
        <p class="text-center mb-5 italic">Pejabat Dinas Komunikasi dan Informatika Kabupaten Purwakarta</p>
    </div>
    <main class="grid lg:grid-cols-2 gap-8 mx-10 my-10">
        <?php $data = mysqli_query($koneksi, "SELECT * FROM profil_pegawai");
        while ($d = mysqli_fetch_array($data)) { ?>
            <div class="flex px-10 py-8 shadow-[0_0_15px_-1px_rgba(0,0,0,0.1)] hover:shadow-[0_0_20px_-3px_rgba(0,0,0,0.3)] rounded-md transition-all duration-300">
                <img src="img/<?= $d['foto'] ?>" alt="" class="w-32 h-32 rounded-full" />
                <div class="px-10">
                    <h1 class="text-2xl font-semibold mb-2"><?= $d['nama'] ?></h1>
                    <p class="mb-3"><?= $d['bidang'] ?></p>
                    <hr class="mb-3" />
                    <p class="mb-3"><?= $d['jabatan'] ?></p>
                    <div class="lg:text-lg text-sm">
                        <a href=""><i class="bi bi-facebook mr-2 text-blue-500 px-2 py-1 rounded-full bg-blue-200"></i></a>
                        <a href=""><i class="bi bi-instagram mr-2 text-red-500 px-2 py-1 rounded-full bg-red-200"></i></a>
                        <a href=""><i class="bi bi-twitter mr-2 text-sky-500 px-2 py-1 rounded-full bg-sky-200"></i></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </main>
</main>

<!-- Footer -->
<div class="bg-[#1364a1] py-[50px] w-full"></div>