<!-- Navbar Starts -->
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
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php?page=tim">Tim</a>
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Galeri</a>
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php#kontak">Kontak Kami</a>
        </nav>
    </div>
</header>
<!-- Navbar Ends -->

<!-- Jumbotron Starts -->
<section class="pt-[80px]">
    <div class="py-5 px-10 lg:mb-2 bg-[#1773b9] text-white">
        <a href="">Beranda</a>
        <h2 class="text-2xl">Galeri</h2>
    </div>
    <div class="relative">
        <div class="bg-[url('img/bg2.png')] bg-no-repeat h-40 bg-cover bg-center lg:hidden">
            <div class="flex items-end h-full bg-gradient-to-t from-black to-transparent text-white">
                <div class="px-5 py-3">
                    <img id="myImg" src="img/bg2.png" alt="Caption" class="h-full opacity-0 myImg" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nostrum.</p>
                    <p class="text-xs">DISKOMINFO &#8226; 1 JANUARI 2023</p>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden lg:block">
        <div class="grid grid-cols-3 gap-5 mx-5 grid-rows-2">
            <div class="relative">
                <div class="bg-[url('img/bg.jpeg')] bg-cover bg-center bg-no-repeat h-40">
                    <div class="bg-gradient-to-t from-black to-transparent h-full text-white flex items-end">
                        <img id="myImg" src="img/bg2.png" alt="Caption" class="h-full opacity-0 myImg absolute top-0 left-0" />
                        <p class="px-5 py-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="relative row-span-2">
                <div class="bg-[url('img/bg.jpeg')] bg-cover bg-center bg-no-repeat h-full">
                    <div class="bg-gradient-to-t from-sky-400 via-transparent to-transparent h-full text-white flex items-end">
                        <img id="myImg" src="img/bg2.png" alt="Caption" class="h-full opacity-0 myImg absolute top-0 left-0" />
                        <p class="px-5 py-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-[url('img/bg.jpeg')] bg-cover bg-center bg-no-repeat h-full">
                    <div class="bg-gradient-to-t from-black to-transparent h-full text-white flex items-end">
                        <img id="myImg" src="img/bg2.png" alt="Caption" class="h-full opacity-0 myImg absolute top-0 left-0" />
                        <p class="px-5 py-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-[url('img/bg.jpeg')] bg-cover bg-center bg-no-repeat h-full">
                    <div class="bg-gradient-to-t from-black to-transparent h-full text-white flex items-end">
                        <img id="myImg" src="img/bg2.png" alt="Caption" class="h-full opacity-0 myImg absolute top-0 left-0" />
                        <p class="px-5 py-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-[url('img/bg.jpeg')] bg-cover bg-center bg-no-repeat h-full">
                    <div class="bg-gradient-to-t from-black to-transparent h-full text-white flex items-end">
                        <img id="myImg" src="img/bg2.png" alt="Caption" class="h-full opacity-0 myImg absolute top-0 left-0" />
                        <p class="px-5 py-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jumbotron Ends -->

<!-- Content Starts -->
<section>
    <div class="mx-5">
        <div class="mr-3 h-1 bg-slate-600 mt-6"></div>
        <p class="bg-slate-600 mb-6 mr-3 inline-block px-2 text-white">Foto Terbaru</p>
    </div>
    <div class="grid md:grid-cols-3 lg:grid-cols-4 mb-5 mx-5 gap-5">
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY tanggal DESC LIMIT 10");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <div class="mx-3">
                <div class="h-15 mb-3 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] bg-sky-400 rounded-lg overflow-hidden group relative">
                    <div style="background-image: url(dashboard/app/foto/galeri/<?= $d['foto'] ?>);" class="w-full h-full  bg-cover bg-center group-hover:scale-110 transition-all duration-300">
                        <img id="myImg" src="dashboard/app/foto/galeri/<?= $d['foto'] ?>" alt="<?= $d['caption'] ?>" class="h-full opacity-0 myImg" />
                    </div>
                </div>
                <p class="mb-2"><?= $d['caption'] ?></p>
                <p class="text-xs">DISKOMINFO &#8226; <?= $d['tanggal'] ?></p>
            </div>
        <?php } ?>
    </div>
</section>
<!-- Content Ends -->

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01" />
    <div id="caption"></div>
</div>
<script src="js/image_modal.js"></script>