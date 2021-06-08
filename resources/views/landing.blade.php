<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.layout')
    @stack('styles')
</head>
<body>
    <header>
        <nav>
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </nav>
    </header>
    
    <div class="container rellax" data-rellax-speed="5" id="front">
        <div id="front-fill" class="rellax" data-rellax-speed="0"></div>
        <div id="front-img" >
            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622880689/Discover%20Cimahi/img-front_v5s9cr.png" alt="front" id="img-front">
        </div>
        <svg class="rellax" data-rellax-speed="10" id="title" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1139.83 166.65"><defs><style>.cls-1{font-size:150px;fill:#fff;font-family:Montserrat-Light, Montserrat;font-weight:300;}.cls-2{letter-spacing:-0.01em;}.cls-3{letter-spacing:-0.01em;}.cls-4{letter-spacing:0em;}.cls-5{letter-spacing:-0.03em;}.cls-6{letter-spacing:0em;}</style></defs><text class="cls-1" transform="translate(0 127.5)">dis<tspan class="cls-2" x="212.1" y="0">c</tspan><tspan class="cls-3" x="294" y="0">ov</tspan><tspan class="cls-4" x="461.7" y="0">e</tspan><tspan class="cls-5" x="551.24" y="0">r</tspan><tspan class="cls-6" x="606.14" y="0">Cimahi</tspan></text></svg>
        <div class="rellax" data-rellax-speed="15" id="tagline">
            Telusuri dan Jelajahi ! Seluk beluk dan hal menarik dari Kota Cimahi! Mulai dari sejarah, kuliner, destinasi wisata, dan hal hal menarik lainnya disini !
        </div>
    </div>
    <div class="section-nav rellax" data-rellax-speed="3.7" data-rellax-percentage="0">
        <nav>
        <ul>
            <li><a class="active" href="#history"><span class="fa fa-fw fa-landmark"></span> History</a></li>
            <li><a href="#news"> <span class="fa fa-fw fa-utensils"></span> Culinary</a></li>
            <li><a href="#contact"> <span class="fa fa-fw fa-map-marked-alt"></span> Destination</a></li>
            <li><a href="#about"> <span class="fa fa-fw fa-info-circle"></span> Information</a></li>
        </ul>
        </nav>
    </div>
    <div class="container rellax" data-rellax-speed="2" id="article">
        <div class="nav-prev">
            <div class="carousel-nav carousel-prev"><p>PREV</p></div>
        </div>
        <div class="nav-next">
            <div class="carousel-nav carousel-next"><p>NEXT</p></div>
        </div>
        <div class="owl-carousel owl-theme owl-article">
                <div class="carousel-item">
                    <a href="a">
                    <div class="carousel-item-content">
                        <div class="carousel-item-desc">
                            RSU Dustira
                            <p>Aasfalksfalksfjd</p>
                        </div>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622114771/Discover%20Cimahi/IMG_20210525_164311_ddvm8r.jpg">
                        <div class="carousel-item-fill"></div>
                    </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="a">
                    <div class="carousel-item-content">
                        <div class="carousel-item-desc">
                        Pasar Antri Cimahi Dibuka Lagi, Gelang Tangan Jadi Tanda Wajib bagi Pedagang yang Negatif Covid-19
                        <p>Suasana Pasar Antri belum terlalu ramai usai Pemkot Cimahi membuka secara resmi pasar di Jalan Sriwijaya Kota Cimahi, Minggu 7 Juni 2020.</p>
                        </div>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622112720/Discover%20Cimahi/IMG_20210525_165006_unxjfe.jpg">
                        <!-- <button>Discover</button> -->
                        <div class="carousel-item-fill"></div>
                    </div>
                    </a>
                </div>
        </div>
    </div>
    <div class="container" id="prelude">
        <div class="content">
            <center>
            <h1>Wilujeng Sumping !</h1><br><br>
                <p>Selamat datang di <b>discoverCimahi</b>! Kota Cimahi adalah kota kecil di Jawa Barat yang belum banyak orang kenal, Sehingga banyak Orang Cimahi yang mengaku-ngaku orang Bandung ketika ditanya tempat tinggal mereka. Mengapa demikian? simpel saja, mereka malas untuk menjelaskannya, dari pada repot-repot panjang lebar menjelaskan apa dan dimana itu Kota Cimahi, lebih cepat apabila kita langsung mengatakan nama "Bandung" yang sebenarnya belum jelas, karena Bandung itu ada Kota Bandung, Kabupaten Bandung, dan Kabupaten Bandung Barat. Nah loh kenapa begitu? Cimahi itu bukan Bandung, namun sangat erat kaitannya dengan Bandung. Baiklah, sebagai orang Cimahi yang baik, biar kami yang mengenalkan kepada Anda, mengenai seluk beluk Kota Cimahi. Berikut penjelasannya.</p>
            </center>
                
        </div>
    </div>
    <div class="container" id="history">
        <!-- <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622922590/Discover%20Cimahi/8b_bjsc4n.jpg" alt=""> -->
        <div class="content">
        <div class="content-left">
        <section class="timeline">
            <ul>
                <li>
                <div>
                    <time>1811</time> Cimahi mulai dikenal ketika pada tahun 1811, Gubernur Jenderal Herman Willem Daendels membuat jalan Anyer-Panarukan, dengan dibuatnya pos penjagaan di Alun-Alun Cimahi sekarang.
                </div>
                </li>
            </ul>
            <ul>
                <li>
                <div>
                    <time>1874-1893</time> dilaksanakan pembuatan jalan kereta api Bandung-Cianjur sekaligus pembuatan Stasiun Cimahi. Tahun 1886 dibangun pusat pendidikan militer beserta fasilitas lainnya seperti Rumah Sakit Dustira dan rumah tahanan militer. Pada tahun 1935, Cimahi ditetapkan sebagai kecamatan berdasarkan lampiran staad tahun 1935.
                </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div>
                        <time>1962</time>dibentuk Kawedanaan Cimahi yang meliputi Kecamatan Cimahi, Padalarang, Batujajar, dan Cipatat.
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div>
                        <time>1976</time>Cimahi yang berasal dari status Kecamatan yang berada di wilayah Kabupaten Bandung sesuai dengan perkembangan dan kemajuannya maka berdasarkan Undang-undang Republik Indonesia Nomor 5 Tahun 1974 tentang Pemerintahan dan Otonomi Daerah dan Peraturan Pemerintah Nomor 29 Tahun 1975 tentang Pembentukan Kota Administratif, Cimahi dapat ditingkatkan statusnya dari Kecamatan menjadi Kota Administratif yang berada di wilayah Kabupaten Bandung.
                    </div>
                </li>
            </ul>
        </section>
        </div>
        <div class="content-right">
        <h1>Sejarah</h1><br><br><br>
        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622922590/Discover%20Cimahi/8b_bjsc4n.jpg" alt="">
            <p>Kota Cimahi adalah sebuah kota di Provinsi Jawa Barat, Indonesia. Kota ini terletak di tengah Kabupaten Bandung, Kota Bandung dan Kabupaten Bandung Barat. Cimahi dahulu bagian dari Kabupaten Bandung, yang kemudian ditetapkan sebagai kota administratif pada tanggal 29 Januari 1976. Pada tanggal 21 Juni 2001, Cimahi ditetapkan sebagai kota otonom. Kota Cimahi terdiri atas 3 kecamatan, yang dibagi lagi atas 15 kelurahan.</p>
            <br>
            <p>Dalam bahasa Sunda, nama Cimahi berasal dari kata cai mahi yang berarti "air yang cukup"</p>
            <!-- <section class="owl-carousel owl-theme owl-history" id="owl-history">
                <div><img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622114771/Discover%20Cimahi/IMG_20210525_164311_ddvm8r.jpg" alt=""></div>
                <div><img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622932636/Discover%20Cimahi/maxresdefault_fkdjdd.jpg" alt=""></div>
                <div><img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622932758/Discover%20Cimahi/alun-alun-cimahi_n3qsip.jpg" alt=""></div>
            </section> -->
        </div>
        </div>
    </div>
    <div class="container" id="culinary">
        <div class="content">
        <h1>Kuliner</h1>          
            <div class="flex-container">
                <div class="flex-item">
                    <div class="card-after" id="id"></div>
                    <div class="card-preview">
                        <p><b>Indonesian</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622975345/Discover%20Cimahi/fd98caedd6f9c64bc40fd2ba24b8133007._20UFS_Header_20Image_August2019_jr5gv1.jpg" alt="">
                    </div>
                    
                </div>
                <div class="flex-item">
                    <div class="card-preview">
                        <p><b>Sundanese</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622977116/Discover%20Cimahi/tlg2.original_bbtjmo.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-preview">
                        <p><b>Western</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622980638/Discover%20Cimahi/1200px-RedDot_Burger_dphtss.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-preview">
                        <p><b>Japanese</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622980805/Discover%20Cimahi/3430518730_emxd7j.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-preview">
                        <p><b>Korean</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622980911/Discover%20Cimahi/7a618ed7ae6104af49dd1b0cad56daff_lpsapi.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-preview">
                        <p><b>Chinese</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622980967/Discover%20Cimahi/Chinese-food_abfszk.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-preview">
                        <p><b>Indian</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622981048/Discover%20Cimahi/the-best-top-10-indian-dishes_sk6tfi.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-preview">
                        <p><b>Middle East</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622981088/Discover%20Cimahi/resep-kebab-turki-mudah-dan-otentik-190724k_un0ra5.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-preview">
                        <p><b>All</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622981175/Discover%20Cimahi/Good_Food_Display_-_NCI_Visuals_Online_mmc0l6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="destination">
        <div class="nav-next">
            <div class="carousel-nav carousel-next"><i class="fa fa-angle-right"></i></div>
        </div>
        <div class="nav-prev">
            <div class="carousel-nav carousel-prev"><i class="fa fa-angle-left"></i></div>
        </div>
        
        <div class="content">
            <h1>Destinasi Wisata</h1>
        </div>
        <div class="owl-carousel owl-destination">
            <div>
                <div class="carousel-item-desc">
                        <div>Technopark</div>
                </div>
                <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622114661/Discover%20Cimahi/IMG_20210525_160642_qxa2il.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Taman Kartini</div>
                </div>
                <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622989678/Discover%20Cimahi/1621948118109-01_pxigfe.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Brigif 15 Kujang</div>
                </div>
                <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622993839/Discover%20Cimahi/IMG_20210526_093548_iyajy8.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Lapang Tembak</div>
                </div>
                <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622993926/Discover%20Cimahi/IMG_20210526_134646_mn653z.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Masjid Al-Baakhirah</div>
                </div>
                <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622993947/Discover%20Cimahi/WhatsApp_Image_2021-05-25_at_19.34.51_emem1m.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Jl. Gandawijaya</div>
                </div>
                <img src="https://api.infocimahi.co/images/hunting/JL.%20GANDAWIJAYA%20.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
    </div>
    <div class="container" id="info">
        <div class="content">
        <h1>Informasi</h1>
            <div class="content-left">
                Nomor Nomor Penting : <br><br>
                Pemadam Kebakaran : 022-665811 <br>
                PLN : 022-6654727 <br>
                BPDB : 022-20661899 <br>
                POLRES Cimahi : 022-6652095 <br>
                PMI : 022-88886971 <br>
                BNN Cimahi : 022-6658571 <br>
            </div>
            <div class="content-right">
                Rumah Sakit <br><br>
                RSUD Cibabat Cimahi, Jl. Raya Cibabat No. 140 <br>
                RSUD Mitra Kasih, Jl. Raya Cibabat No. 341 <br>
                RSU Dustira, Jl. Rumah Sakit No. 1 Cimahi <br>
                RS Mitra Anugrah Lestari, Jl. Cibaligo No. 76 Cimindi - Cimahi <br>
                RSU Kasih Bunda, Jl. Mahar Martanegara No. 166, Baros
            </div>
        </div>
    </div>
    <div class="container" id="footer">
        <div class="content">
            Photo Source : me, infocimahi.co, @brokencookiexx, google.com <br><br>
            &copy;2021 DiscoverCimahi, Designed by zharwr
        </div>
    </div>
    @stack('scripts')
</body>
</html>