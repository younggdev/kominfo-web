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
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Berita</a>
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
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php?page=galeri">Galeri</a>
            <a class="px-4 py-2 mt-2 mx-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php#kontak">Kontak Kami</a>
        </nav>
    </div>
</header>
<!-- Navbar Ends -->

<!-- Jumbotron starts -->
<section class="pt-[80px]">
    <div class="py-5 px-10 lg:mb-2 bg-[#1773b9] text-white">
        <a href="index.php">Beranda</a>
        <h2 class="text-2xl">Berita</h2>
    </div>
    <div class="bg-[url('img/bg2.png')] bg-no-repeat bg-cover bg-center lg:hidden">
        <div class="flex items-end h-full bg-gradient-to-t from-black to-transparent text-white">
            <div class="p-5">
                <a href="" class="bg-gray-500 p-1 text-xs">KATEGORI</a>
                <a href="detail_berita.php" class="text-xl my-2 block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam at maiores excepturi voluptates quis ea in repellat placeat, animi veritatis!</a>
                <p class="text-xs">DISKOMINFO &#8226; 1 JANUARI 2023</p>
            </div>
        </div>
    </div>
    <div class="hidden lg:block">
        <div class="grid grid-cols-4 grid-rows-2 gap-2 mx-5 h-96">
            <div class="col-span-2 row-span-2 bg-[url('img/bg2.png')] bg-no-repeat bg-cover bg-center">
                <div class="flex items-end h-full bg-gradient-to-t from-black to-transparent text-white">
                    <div class="p-5">
                        <a href="" class="bg-gray-500 p-1 text-xs">KATEGORI</a>
                        <a href="detail_berita.php" class="text-2xl my-2 block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam at maiores excepturi voluptates quis ea in repellat placeat, animi veritatis!</a>
                        <p class="text-xs">DISKOMINFO &#8226; 1 JANUARI 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-span-2 bg-[url('img/bg2.png')] bg-no-repeat bg-cover bg-center">
                <div class="flex items-end h-full text-white bg-gradient-to-t from-black to-transparent">
                    <div class="p-5">
                        <a href="" class="bg-gray-500 p-1 text-xs">KATEGORI</a>
                        <a href="detail_berita.php" class="text-lg my-2 block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, commodi?</a>
                        <p class="text-xs">DISKOMINFO &#8226; 1 JANUARI 2023</p>
                    </div>
                </div>
            </div>
            <div class="bg-[url('img/bg2.png')] bg-no-repeat bg-cover bg-center">
                <div class="flex items-end h-full text-white bg-gradient-to-t from-black to-transparent">
                    <div class="p-5">
                        <a href="" class="bg-gray-500 p-1 text-xs">KATEGORI</a>
                        <a href="detail_berita.php" class="text-sm my-2 block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                        <p class="text-xs">DISKOMINFO &#8226; 1 JANUARI 2023</p>
                    </div>
                </div>
            </div>
            <div class="bg-[url('img/bg2.png')] bg-no-repeat bg-cover bg-center">
                <div class="flex items-end h-full text-white bg-gradient-to-t from-black to-transparent">
                    <div class="p-5">
                        <a href="" class="bg-gray-500 p-1 text-xs">KATEGORI</a>
                        <a href="detail_berita.php" class="text-sm my-2 block">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
                        <p class="text-xs">DISKOMINFO &#8226; 1 JANUARI 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jumbotron ends -->

<!-- Content Starts -->
<article>
    <div class="lg:grid lg:grid-cols-3 mx-5 my-10">
        <div class="col-span-2">
            <div class="mr-3 h-1 bg-slate-600"></div>
            <p class="bg-slate-600 mb-6 mr-3 inline-block px-2 text-white">Berita Terbaru</p>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id DESC LIMIT 5");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="md:flex shadow-md rounded-md overflow-hidden mr-3 mb-10">
                    <img src="dashboard/app/foto/berita/<?= $d['foto'] ?>" alt="gambar" class="md:w-96" />
                    <div class="pl-3">
                        <p class="text-2xl font-semibold text-sky-600 mt-3"><?= $d['judul'] ?></p>
                        <p class="text-sm my-2"><i class="bi bi-calendar pr-2"></i><?= $d['tanggal'] ?></p>
                        <p><?= substr($d['isi'], 0, 200) ?>. . .</p>
                        <div class="flex justify-end">
                            <a href="index.php?page=detail-berita&&id=<?= $d['id'] ?>" class="px-3 py-2 bg-sky-500 my-5 mr-3 rounded-md inline-block hover:tracking-wide transition-all duration-300 text-white">Baca Selengkapnya <i class="bi bi-arrow-right ml-2 text-lg"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="ml-3">
            <div class="mr-3 h-1 bg-slate-600"></div>
            <p class="bg-slate-600 mb-6 mr-3 inline-block px-2 text-white">Berita Lainnya</p>
            <?php
            $dataBaru = mysqli_query($koneksi, 'SELECT * FROM berita LIMIT 10 OFFSET 5');
            if ($dataBaru->num_rows > 0) {
                // Melakukan iterasi untuk mengambil data setelah data ke-5
                while ($row = $dataBaru->fetch_assoc()) {
            ?>
                    <div class="flex my-5">
                        <img src="img/<?= $row['gambar'] ?>" alt="" class="w-40 rounded-md" />
                        <div class="pl-2">
                            <a href="detail_berita.php"><?= $row['judul'] ?></a>
                            <p class="italic text-sm mt-2 text-zinc-500"><?= $row['tanggal'] ?></p>
                        </div>
                    </div>
            <?php }
            } ?>

        </div>
    </div>
</article>