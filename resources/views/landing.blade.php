<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.layout')
    @stack('styles')
</head>
<div class="loader">L O A D I N G<div class="lds-ripple"><div></div><div></div></div></div>
<body>
    <header>
        <nav>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#article">News</a></li>
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
    <div class="section-nav sticky" data-rellax-speed="3" data-rellax-percentage="0">
        <nav>
        <ul>
            <li><a href="#history"><span class="fa fa-fw fa-landmark"></span> History</a></li>
            <li><a href="#culinary"> <span class="fa fa-fw fa-utensils"></span> Culinary</a></li>
            <li><a href="#destination"> <span class="fa fa-fw fa-map-marked-alt"></span> Destination</a></li>
            <li><a href="#info"> <span class="fa fa-fw fa-info-circle"></span> Information</a></li>
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
                    <a href="#">
                    <div class="carousel-item-content">
                        <div class="carousel-item-desc">
                            <div id="article-date">
                                20 Januari 2021
                            </div>
                        Pedagang Lotek Positif Corona Meninggal di RS Dustira Cimahi
                            <p> Warga Kota Cimahi yang meninggal akibat Corona atau COVID-19 mengalami penambahan satu orang. Tercatat hingga kini pasien meninggal karena Corona di Cimahi sebanyak lima orang.</p>
                        </div>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622114771/Discover%20Cimahi/IMG_20210525_164311_ddvm8r.jpg">
                        <div class="carousel-item-fill"></div>
                    </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                    <div class="carousel-item-content">
                        <div class="carousel-item-desc">
                        <div id="article-date">
                                9 Juni 2021
                            </div>
                        Pasar Antri Cimahi Dibuka Lagi, Gelang Tangan Jadi Tanda Wajib bagi Pedagang yang Negatif Covid-19
                        <p>Suasana Pasar Antri belum terlalu ramai usai Pemkot Cimahi membuka secara resmi pasar di Jalan Sriwijaya Kota Cimahi, Minggu 7 Juni 2020.</p>
                        </div>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622112720/Discover%20Cimahi/IMG_20210525_165006_unxjfe.jpg">
                        <!-- <button>Discover</button> -->
                        <div class="carousel-item-fill"></div>
                    </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                    <div class="carousel-item-content">
                        <div class="carousel-item-desc">
                        <div id="article-date">
                                9 Juni 2021
                            </div>
                            McD Cimahi Tutup Lebih Cepat karena Kewalahan Terima Pesanan BTS Meal, Ojol Kecewa
                        <p>Gerai makanan cepat saji McDonald’s (Mcd) di kawasan Sangkuriang, Kota Cimahi, Jawa Barat terpaksa menutup layanannya lebih cepat pada siang tadi.</p>
                        </div>
                        <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/06/09/3448246030.png">
                        <!-- <button>Discover</button> -->
                        <div class="carousel-item-fill"></div>
                    </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                    <div class="carousel-item-content">
                        <div class="carousel-item-desc">
                        <div id="article-date">
                            11 Juni 2021
                            </div>
                            PROFIL PSKC Kota Cimahi - Ini Lawan yang akan Dihadapi dalam Uji Coba Besok
                        <p>Salah satu klub peserta Liga 2, PSKC Kota Cimahi, makin serius menatap pertarungan Liga 2 yang akan bergulir tidak lama lagi.</p>
                        </div>
                        <img src="https://cdn-2.tstatic.net/jabar/foto/bank/images/pskc-kota-cimahi_1062021.jpg">
                        <div class="carousel-item-fill"></div>
                    </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                    <div class="carousel-item-content">
                        <div class="carousel-item-desc">
                        <div id="article-date">
                            11 Juni 2021
                            </div>
                            Guru dan Murid Terpapar Covid-19, Simulasi PTM di Cimahi Dihentikan
                        <p>Kegiatan simulasi pembelajaran tatap muka (PTM) gelombang 2 di Kota Cimahi akhirnya dihentikan. Pasalnya, ditemukan sejumlah guru, murid SD dan SMP yang terpapar Covid-19, sehingga sangat berisiko jika simulasi terus dilanjutkan.</p>
                        </div>
                        <img src="https://img.inews.co.id/media/822/files/inews_new/2021/05/24/pembelajaran_tatap_muka.jpeg">
                        <div class="carousel-item-fill"></div>
                    </div>
                    </a>
                </div>
        </div>
    </div>
    <div class="container" id="prelude">
        <div class="content">
            <h1>Wilujeng Sumping</h1><br><br>
                <p>Selamat datang di <b>discoverCimahi</b>! Kota Cimahi adalah kota kecil di Jawa Barat yang belum banyak orang kenal, Sehingga banyak Orang Cimahi yang mengaku-ngaku orang Bandung ketika ditanya tempat tinggal mereka. Mengapa demikian? simpel saja, mereka malas untuk menjelaskannya, dari pada repot-repot panjang lebar menjelaskan apa dan dimana itu Kota Cimahi, lebih cepat apabila kita langsung mengatakan nama "Bandung" yang sebenarnya belum jelas, karena Bandung itu ada Kota Bandung, Kabupaten Bandung, dan Kabupaten Bandung Barat. Nah loh kenapa begitu? Cimahi itu bukan Bandung, namun sangat erat kaitannya dengan Bandung. Baiklah, sebagai orang Cimahi yang baik, biar kami yang mengenalkan kepada Anda, mengenai seluk beluk Kota Cimahi. Berikut penjelasannya.</p>
                
        </div>
    </div>
    <div class="container" id="history">
        <h1>Sejarah</h1>
        <div class="owl-history-wrapper">
            <div class="nav-prev">
                <div class="carousel-nav carousel-prev" id="history-prev"><p>PREV</p></div>
            </div>
            <div class="nav-next">
                <div class="carousel-nav carousel-next"><p>NEXT</p></div>
            </div>
                <div class="owl-carousel owl-history">
                        <div>
                            <div class="carousel-item-desc">
                                    <div><b>The Historich</b> merupakan sebuah gedung bersejarah peninggalan Hindia Belanda yang ada di Kota Cimahi provinsi Jawa Barat, Gedung ini beralamat di Jl. Gatot Subroto No. 19 Kelurahan Baros, Kota Cimahi dan saat ini difungsikan sebagai gedung kesenian. Gedung ini dulunya bernama Sociated for Officied Cimahi berubah menjadi Gedung Sudirman dan pernah digunakan sebagai Gedung DPRD oleh Pemkot Cimahi, terletak di Jl. Jend. Gatot Subroto No.19 Kota Cimahi, dibangun pada tahun 1886.</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622922590/Discover%20Cimahi/8b_bjsc4n.jpg" alt="">
                            
                        </div>
                        <div>
                            <div class="carousel-item-desc">
                                <div><b>Loji</b> atau Pos Penjagaan dibangun pada tahun 1811, bersamaan dengan pembangunan Jalan Anyer – Panarukan oleh Gubernur Jendral Herman Willem Daendels.
                                    Pada waktu pembangunan Jalan Raya Pos dari Anyer itu sudah mencapai wilayah Bandung, pemerintah kolonial memutuskan untuk membangun sebuah pos penjagaan (semacam loji) di Cimahi, letaknya persisnya di sekitar Alun-alun Cimahi sekarang.</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623199432/Discover%20Cimahi/9cf1e-loji2bcimahi_ghmzp3.jpg" alt="">
                        </div>
                        <div>
                            <div class="carousel-item-desc">
                                <div><b>Stasiun Kereta Api Cimahi</b> dibangun bersamaan dengan pembangunan Jalan kereta antara Bandung – Cianjur pada tahun 1874 – 1893. Rencana menumbuhkan wilayah tersebut telah dirintis sejak dekade 1880-an dengan membuat rencana kota militer Cimahi dan pusat pemerintahan di Kota Bandung. Rencana ini kemudian dimulai dengan mendirikan Stasiun Cimahi. Pembangunan stasiun ini diprakarsai oleh Staatsspoorwegen (SS), perusahaan kereta api milik Pemerintah Kolonial Hindia Belanda. Stasiun ini mulai beroperasi penuh pada tanggal 17 Mei 1884, bersamaan dengan pembukaan jalur kereta api Padalarang–Bandung</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622932636/Discover%20Cimahi/maxresdefault_fkdjdd.jpg" alt="">
                        </div>
                        <div>
                            <div class="carousel-item-desc">
                                <div><b>Pusat Pendidikan Militer</b> dan bangunan-bangunan yang berdiri sejak tahun 1886 sebagai Pusat Pendidikan Militer sampai sekarang di Kota Cimahi. Pembangunan instalasi militer itu menandai orientasi pertahanan kolonial yang lebih memerhatikan ancaman dari dalam daripada serbuan dari luar. Pembangunan instalasi-instalasi militer di Cimahi menandai perubahan orientasi tersebut. Selain Cimahi, pemerintah kolonial juga membangun instalasi-instalasi militer di Magelang dan Malang. Kota-kota inilah yang pada masa itu disebut sebagai Kota Garnisun.</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623200051/Discover%20Cimahi/2539589808_uxli7z.jpg" alt="">
                        </div>
                        <div>
                            <div class="carousel-item-desc">
                                <div><b>Rumah Tahanan Militer</b> terletak di Jl. Poncol, Cimahi, rumah tahanan militer Poncol yang di dinding bagian atas pintu masuk tertulis angka tahun 1886.</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/e_auto_brightness/v1623312470/Discover%20Cimahi/penjara_poncol1jpg_fx6qmb.jpg" alt="">
                        </div>
                        <div>
                            <div class="carousel-item-desc">
                                <div>Kompleks pemakaman <b>Ereveld Leuwigajah</b> di Cimahi ini didirikan pada 20 Desember 1949 yang dikelola oleh yayasan Oorlogsgravenstichting yang berkantor pusat di Den Haag, Belanda. Yang menjadikannya unik, meskipun berada dilahan Negara Kesatuan Republik Indonesia, Ereveld Leuwigajah ini berada dalam teritorial Kerajaan Belanda. Jadi tidak heran jika segala keterangan yang tertulis di kompleks Ereveld ini menggunakan bahasa Belanda. Bahkan dalam momen-momen peringatan tertentu, berkibarlah sang triwarna Rood Wit Blau, bendera Belanda di langit Cimahi Selatan pada sebuah tiang megah yang berada diujung makam.</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623314088/Discover%20Cimahi/1605247717144-BeritaBaik_Djuli_20Pamungkas_Ereveld_20Leuwigajah_204_v7gnri.jpg" alt="">
                        </div>
                        <div>
                            <div class="carousel-item-desc">
                                <div><b>Rumah Sakit Tk. II Dustira</b> adalah rumah sakit yang berada di Cimahi, merupakan peninggalan Belanda yang didirikan tahun 1887 dengan nama “Milifaire Hospital” dan tahun 1956 diberi nama Rumah Sakit Dustira. Diambil dari nama Mayor dr. Dustira Prawiraamidjaya, seorang dokter kelahiran Tasikmalaya, 25 Juli 1919. Rumah Sakit ini sekarang menjadi rumah sakit kebanggaan prajurit di wilayah Kodam III/Siliwangi dan sekaligus sebagai rumah sakit rujukan tertinggi karena mampu mengupayakan pelayanan kesehatan kuratif dan rehabilitatif yang terpadu dengan pelaksanaan kegiatan kesehatan promotif dan preventif.</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623315053/Discover%20Cimahi/AF1QipOp0oepgO1WQautUdh1mxnu9wfpBNGt62r3fgTH_s1024_ztuyc7.png" alt="">
                        </div>
                        <div>
                            <div class="carousel-item-desc">
                                <div>Pembangunan gedung <b>Gereja Santo Ignatius Cimahi</b> dimulai pada tahun 1906. Dengan bantuan Pemerintah Hindia belanda, Kerajaan Belanda serta beberapa relawan akhirnya gedung gereja selesai dibangun pada tanggal 20 Desember 1908 dibawah pengawasa Pastor Martinus Timmers SJ dan Pastor Jacobus Van Santen (1907) kemudian diteruskan oleh Pastor Joanes Kremer S.J. (1908). Luas bangunan gedung gereja 8x16 meter berbentuk lurus dengan fascade (tampak muka) bergaya neo romantic dengan langit-langit dan jendela berbentuk melengkung. Altar menyatu dengan tabernakel yang terbuat dari kayu jati dengan ukiran bergaya gothic dengan salib dari baja bertengger di bumbungan gereja, serta mampu menampung umat sekitar 100-150 orang.</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623315758/Discover%20Cimahi/St._Ignatius_Cimahi_pe5jz5.jpg" alt="">
                        </div>
                        <div>
                            <div class="carousel-item-desc">
                                <div><b>Rumah Pemotongan Hewan</b> atau abattoir yang berada di Jl. Sukimun, Baros, Cimahi. RPH ini lebih dikenal masyarakat dengan nama RPH pajagalan, namun tempat pemotongan hewan seperti Sapi, kerbau dan lain-lain ini sudah lama tidak beroperasi, sehingga terlihat terbengkalai.</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623315925/Discover%20Cimahi/rumah-pemotongan-hewan-salah-satu-bangunan-bersejarah-di-cimahi-yang-lolos-verifikasi-cagar-budaya-5fd72b161c6ce_lyhc80.jpg" alt="">
                        </div>
                        <div>
                            <div class="carousel-item-desc">
                                <div><b>Masjid Agung Kota Cimahi</b> pertama didirikan pada tahun 1962. Hingga saat ini sudah mengalami beberapa kali pengembangan. Sebelum menjadi megah seperti sekarang, Masjid Agung Kota Cimahi mulanya hanya bangunan panggung seluas 200 M². Konstruksinya dari kayu dan bambu beratap genting serta berfondasi batu. Bangunan sederhana tersebut didirikan pada tahun 1817 / 340 H di atas tanah wakaf RH. M. Nasir (Abu Nasir) melalui ahli warisnya, Rd. Hj. Halimah Basyah.</div>
                            </div>
                            <div class="carousel-item-fill"></div>
                            <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623316564/Discover%20Cimahi/a04fe88518ec129442eb532d185ce95e_ux3jdd.jpg" alt="">
                        </div>
                </div>
        </div>
        <div class="content">
        <div class="content-left">
        <p>Kota Cimahi adalah sebuah kota di Provinsi Jawa Barat, Indonesia. Kota ini terletak di tengah Kabupaten Bandung, Kota Bandung dan Kabupaten Bandung Barat. Cimahi dahulu bagian dari Kabupaten Bandung, yang kemudian ditetapkan sebagai kota administratif pada tanggal 29 Januari 1976. Pada tanggal 21 Juni 2001, Cimahi ditetapkan sebagai kota otonom. Kota Cimahi terdiri atas 3 kecamatan, yang dibagi lagi atas 15 kelurahan.</p>
            <br>
            <p>Sesuai latar belakang historis dan perkembangan, awalnya Kota Cimahi diarahkan untuk dapat berfungsi sebagai kota pendidikan militer, pusat perdagangan dan jasa, daerah industri serta pemukiman dan perumahan sekaligus wilayah penyangga Kota Bandung. Dalam bahasa Sunda, nama Cimahi berasal dari kata cai mahi yang berarti "air yang cukup"</p>   
        </div>
        <div class="content-right">
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
                    <div class="card-after">
                        <div class="card-content">
                            <div class="owl-carousel owl-theme owl-culinary-id">
                                <div>
                                        <h3>Kafe Kupu Kupu</h3><br>
                                        <span id="id">Indonesian</span>
                                        <img src="https://ik.imagekit.io/tvlk/cul-asset/guys1L+Yyer9kzI3sp-pb0CG1j2bhflZGFUZOoIf1YOBAm37kEUOKR41ieUZm7ZJ/tvlk-prod-cul-assets/culinary/asset/REST_201-960x720-FIT_AND_TRIM-2f7993b494e02ac803f1710f45004ef2.jpeg" alt="">
                                        <br>
                                        <p><b>Alamat</b>: Jl. Kolonel Masturi No.KM.3, Cipageran, Kec. Cimahi Utara, Kota Cimahi</p>
                                </div>
                                <div>
                                        <h3>Dapur Kraton Restaurant</h3><br>
                                        <span id="id">Indonesian</span>
                                        <img src="https://keluyuran.com/wp-content/uploads/2016/12/dk-resto.webp" alt="">
                                        <br>
                                        <p><b>Alamat</b>: Komplek Pondok Mas Indah, Jl. Pd. Mas Raya No.42, Leuwigajah, Kec. Cimahi Sel., Kota Cimahi</p>
                                </div>
                                <div>
                                        <h3>Mymo Bakso Ceker</h3><br>
                                        <span id="id">Indonesian</span>
                                        <img src="https://keluyuran.com/wp-content/uploads/2017/10/mymo-mie-baso-ceker.webp" alt="">
                                        <br>
                                        <p><b>Alamat</b>: Komplek Pondok Mas Indah, Jl. Pd. Mas Raya No.42, Leuwigajah, Kec. Cimahi Sel., Kota Cimahi</p>
                                </div>
                                <div>
                                        <h3>Warung Rizky</h3><br>
                                        <span id="id">Indonesian</span>
                                        <img src="https://keluyuran.com/wp-content/uploads/2017/10/warung-rizky-cimahi.webp" alt="">
                                        <br>
                                        <p><b>Alamat</b>: Jl. Jend. Sudirman No.1, Baros, Kec. Cimahi Tengah, Kota Cimahi,</p>
                                </div>
                                <div>
                                        <h3>RM Padang Kiambang Raya</h3><br>
                                        <span id="id">Indonesian</span>
                                        <img src="https://keluyuran.com/wp-content/uploads/2018/10/Capture-21.webp" alt="">
                                        <br>
                                        <p><b>Alamat</b>: Jl. Raya Gadobangkong No.4C, Gadobangkong, Kec. Ngamprah, Kabupaten Bandung Barat</p>
                                </div>
                                <div>
                                        <h3>Kedai Belly Boom</h3><br>
                                        <span id="id">Indonesian</span>
                                        <span id="we">Western</span>
                                        <img src="https://jejakpiknik.com/wp-content/uploads/2021/04/2_FB-Kedaibellyboom-630x380.jpg" alt="">
                                        <br>
                                        <p><b>Alamat</b>:  Jl. Raya Cibabat No.120/ 424, Cibabat, Kec. Cimahi Utara, Kota Cimahi</p>
                                        <p></p>
                                </div>
                            </div>  
                            <!-- <div class="owl-culinary-nav">
                                <button id="prev">Prev</button><button id="next">Next</button>
                            </div> -->
                            
                        </div>
                        
                    </div>
                    <div class="card-preview">
                        <p><b>Indonesian</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622975345/Discover%20Cimahi/fd98caedd6f9c64bc40fd2ba24b8133007._20UFS_Header_20Image_August2019_jr5gv1.jpg" alt="">
                    </div>
                    
                </div>
                <div class="flex-item" id="sundanese">
                    <div class="card-after">
                        <div class="card-content">
                            <div class="owl-carousel owl-culinary-su">
                                    <div>
                                        <h3>Alam Wisata Cimahi</h3><br>
                                        <span id="su">Sundanese</span>
                                        <span id="we">Western</span>
                                        <span id="ch">Chinese</span>
                                        <img src="https://www.jejakpiknik.com/wp-content/uploads/2020/02/awc@alamwisatacimahi-630x380.jpg" alt="">
                                        <br>
                                        <p><b>Alamat</b>: Jln. Kolonel Matsuri KM.04, No.157 Cipageran, Cimahi Utara, Jawa Barat.</p>
                                        <p></p>
                                    </div>
                                    <div>
                                        <h3>Warung Nasi Ampera</h3><br>
                                        <span id="su">Sundanese</span>
                                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623406114/Discover%20Cimahi/picture-1521521151_wmchr5.jpg" alt="">
                                        <br>
                                        <p><b>Alamat</b>: Jln. Kolonel Matsuri KM.04, No.157 Cipageran, Cimahi Utara, Jawa Barat.</p>
                                        <p></p>
                                    </div>
                                    <div>
                                        <h3>Rumah Makan Timbel Bu Yanti</h3><br>
                                        <span id="su">Sundanese</span>
                                        <span id="id">Indonesian</span>
                                        <img src="https://media-cdn.tripadvisor.com/media/photo-o/05/5f/79/37/rumah-makan-timbel-bu.jpg" alt="">
                                        <br>
                                        <p><b>Alamat</b>: Jln. Baros (Bertempat Di Lantai 2 Di Atas Toko Tugino Yang Berada Di Sebelah Saung Steak Dan Saung Baros), Cimahi 40521 Indonesia</p>
                                        <p></p>
                                    </div>
                            </div>
                            <!-- <div class="owl-culinary-nav">
                                <button>Prev</button><button>Next</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-preview">
                        <p><b>Sundanese</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622977116/Discover%20Cimahi/tlg2.original_bbtjmo.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-after">
                            <div class="card-content">
                            <div class="owl-carousel owl-culinary-we">
                                <div>
                                    <h3>EatBoss</h3><br>
                                    <span id="we">Western</span>
                                    <span id="ch">Chinese</span>
                                    <img src="https://jejakpiknik.com/wp-content/uploads/2021/04/8_kusnadi-kusnadi-630x380.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Jend. H. Amir Machmud No.429, Cigugur Tengah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Hanjuang Café & Resto</h3><br>
                                    <span id="we">Western</span>
                                    <span id="ja">Japanese</span>
                                    <span id="kr">Korean</span>
                                    <img src="https://jejakpiknik.com/wp-content/uploads/2021/04/9_twitter-@pandigacimahi-630x380.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Sirnarasa No.11 Cihanjuang, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>McDonalds</h3><br>
                                    <span id="we">Western</span>
                                    <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623413968/Discover%20Cimahi/EXoyW-iUYAMBtgz_vvmali.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Sangkuriang No.1, Padasuka, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40512</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Alam Wisata Cimahi</h3><br>
                                    <span id="su">Sundanese</span>
                                    <span id="we">Western</span>
                                    <span id="ch">Chinese</span>
                                    <img src="https://www.jejakpiknik.com/wp-content/uploads/2020/02/awc@alamwisatacimahi-630x380.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jln. Kolonel Matsuri KM.04, No.157 Cipageran, Cimahi Utara, Jawa Barat.</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Kedai Belly Boom</h3><br>
                                    <span id="id">Indonesian</span>
                                    <span id="we">Western</span>
                                    <img src="https://jejakpiknik.com/wp-content/uploads/2021/04/2_FB-Kedaibellyboom-630x380.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>:  Jl. Raya Cibabat No.120/ 424, Cibabat, Kec. Cimahi Utara, Kota Cimahi</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>A&W Restaurant </h3><br>
                                    <span id="we">Western</span>
                                    <img src="https://bandung.transstudiomall.com/asset/tenant/20190409172600000000.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Cimahi Mall, Ground Floor, Blok BT / A - 1, Jl. Gandawijaya No.1, Setiamanah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40524</p>
                                </div>
                                <div>
                                    <h3>KFC</h3><br>
                                    <span id="we">Western</span>
                                    <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623418633/Discover%20Cimahi/REST_426-720x720-FIT_AND_TRIM-3d7d45c58008504de236f9f2fa301f7c_uui0ca.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: . Raya Cibabat, RT.01/RW.03, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40513 <br>Cimahi Mall, Jl. Gandawijaya, Setiamanah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40523</p>
                                </div>
                            </div>
                            <!-- <div class="owl-culinary-nav">
                                <button>Prev</button><button>Next</button>
                            </div> -->
                            </div>
                    </div>
                    <div class="card-preview">
                        <p><b>Western</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622980638/Discover%20Cimahi/1200px-RedDot_Burger_dphtss.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-after">
                        <div class="card-content">
                        <div class="owl-carousel owl-culinary-ja">
                                <div>
                                    <h3>Ramen Aboy</h3><br>
                                    <span id="ja">Japanese</span>
                                    <img src="https://keluyuran.com/wp-content/uploads/2019/06/ramen-enak-di-cimahi-ramen-aboy.webp" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Cipageran, Kec. Cimahi Utara, Kota Cimahi</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Ramen Hashi</h3><br>
                                    <span id="ja">Japanese</span>
                                    <img src="https://keluyuran.com/wp-content/uploads/2019/06/hashi-ramen-cimahi.webp" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Lurah No.169, Karangmekar, Kec. Cimahi Tengah, Kota Cimahi</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Ramen Aa</h3><br>
                                    <span id="ja">Japanese</span>
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/08/f8/d9/20161231-143146-largejpg.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Warung Contong no. 70, Cimahi 40524 Indonesia</p>
                                    <p></p>
                                </div>
                            </div>
                            <!-- <div class="owl-culinary-nav">
                                <button>Prev</button><button>Next</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-preview">
                        <p><b>Japanese</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622980805/Discover%20Cimahi/3430518730_emxd7j.jpg" alt="">
                    </div>
                </div>
                <div class="flex-item">
                    <div class="card-after">
                        <div class="card-content">
                        <div class="owl-carousel owl-culinary-kr">
                                <div>
                                    <h3>Fat Oppa</h3><br>
                                    <span id="kr">Korean</span>
                                    <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623418157/Discover%20Cimahi/picture-1555082574_jvrppt.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl.Raya Barat No.772, Padasuka, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40526</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Hanjuang Café & Resto</h3><br>
                                    <span id="we">Western</span>
                                    <span id="ja">Japanese</span>
                                    <span id="kr">Korean</span>
                                    <img src="https://jejakpiknik.com/wp-content/uploads/2021/04/9_twitter-@pandigacimahi-630x380.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Sirnarasa No.11 Cihanjuang, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Jeontong Korean Street Food</h3><br>
                                    <span id="kr">Korean</span>
                                    <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623418406/Discover%20Cimahi/REST_IMG-960x720-FIT_AND_TRIM-a4fb87e1c2165ca78b922a3cbd34a186_qznjrx.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Raya Cimindi gg haji arsad rt04 rw 19 no 1, Cibeureum, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40535</p>
                                    <p></p>
                                </div>  
                        </div>
                            <!-- <div class="owl-culinary-nav">
                                <button>Prev</button><button>Next</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-preview">
                        <p><b>Korean</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622980911/Discover%20Cimahi/7a618ed7ae6104af49dd1b0cad56daff_lpsapi.jpg" alt="">
                    </div>
                </div>
                
                <div class="flex-item">
                    <div class="card-after">
                        <div class="card-content">
                        <div class="owl-carousel owl-culinary-ch">
                                <div>
                                    <h3>RM Bakmi Gang Sempit</h3><br>
                                    <span id="ch">Chinese</span>
                                    <span id="id">Indonesian</span>
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/18/be/9e/52/kwetiaw-goreng-sapi.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Raya Tagog no 501, Cimahi 40523 Indonesia</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>EatBoss</h3><br>
                                    <span id="we">Western</span>
                                    <span id="ch">Chinese</span>
                                    <img src="https://jejakpiknik.com/wp-content/uploads/2021/04/8_kusnadi-kusnadi-630x380.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Jend. H. Amir Machmud No.429, Cigugur Tengah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Alam Wisata Cimahi</h3><br>
                                    <span id="su">Sundanese</span>
                                    <span id="we">Western</span>
                                    <span id="ch">Chinese</span>
                                    <img src="https://www.jejakpiknik.com/wp-content/uploads/2020/02/awc@alamwisatacimahi-630x380.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jln. Kolonel Matsuri KM.04, No.157 Cipageran, Cimahi Utara, Jawa Barat.</p>
                                    <p></p>
                                </div>
                            </div>
                            <!-- <div class="owl-culinary-nav">
                                <button>Prev</button><button>Next</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-preview">
                        <p><b>Chinese</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622980967/Discover%20Cimahi/Chinese-food_abfszk.jpg" alt="">
                    </div>
                </div>
                <!-- <div class="flex-item">
                    <div class="card-after">
                        <div class="card-content">
                            Gaada 
                        </div>
                    </div>
                    <div class="card-preview">
                        <p><b>Indian</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622981048/Discover%20Cimahi/the-best-top-10-indian-dishes_sk6tfi.jpg" alt="">
                    </div>
                </div> -->
                <div class="flex-item">
                    <div class="card-after">
                        <div class="card-content">
                        <div class="owl-carousel owl-culinary-ch">
                                <div>
                                    <h3>KABOBS</h3><br>
                                    <span id="me">Middle Eastern</span>
                                    <img src="https://assets-pergikuliner.com/mEPbEo8fpP2BjyXd7ykWkkGFhqU=/385x290/smart/https://assets-pergikuliner.com/uploads/image/picture/962641/picture-1529648870.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Jend. H. Amir Machmud No.482, Padasuka, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40526</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Republic Kebab Premium</h3><br>
                                    <span id="me">Middle Eastern</span>
                                    <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623435130/Discover%20Cimahi/edc2fbb96a3843d682f03daa7e3046eb_1572518800024995426_mphu1r.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Pesantren No.166, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40513</p>
                                    <p></p>
                                </div>
                                <div>
                                    <h3>Halabi Kitchen</h3><br>
                                    <span id="me">Middle Eastern</span>
                                    <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1623419536/Discover%20Cimahi/AF1QipMb06kCSnUyrNI61lKE4SpX0tSJGolIqg_NRzm7_s512_cbqeo5.jpg" alt="">
                                    <br>
                                    <p><b>Alamat</b>: Jl. Pesantren No.190, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40513</p>
                                    <p></p>
                                </div>
                            </div>
                            <!-- <div class="owl-culinary-nav">
                                <button>Prev</button><button>Next</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-preview">
                        <p><b>Middle East</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622981088/Discover%20Cimahi/resep-kebab-turki-mudah-dan-otentik-190724k_un0ra5.jpg" alt="">
                    </div>
                </div>
                <!-- <div class="flex-item">
                    <div class="card-preview">
                        <p><b>All</b></p>
                        <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622981175/Discover%20Cimahi/Good_Food_Display_-_NCI_Visuals_Online_mmc0l6.jpg" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container" id="destination">
        <div class="nav-next">
            <div class="carousel-nav carousel-next"><p>NEXT</p></div>
        </div>
        <div class="nav-prev">
            <div class="carousel-nav carousel-prev"><p>PREV</p></div>
        </div>
        
        <div class="content">
            <h1>Destinasi Wisata</h1>
        </div>
        <div class="owl-carousel owl-destination">
            <div>
                <div class="carousel-item-desc">
                        <div>Technopark</div>
                        <p>Jl. Baros Utama No.78, Leuwigajah, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40532</p>
                        
                </div>
                <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622114661/Discover%20Cimahi/IMG_20210525_160642_qxa2il.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Pandiga Cimahi</div>
                        <p>Jl. Sirnarasa Jl. Cihanjuang No.11, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40513</p>
                        
                </div>
                <img src="https://pbs.twimg.com/media/DBPGGWbV0AAns9_.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Taman Kartini</div>
                        <p>Jl. Baros No.6, Baros, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40521</p>
                </div>
                <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622989678/Discover%20Cimahi/1621948118109-01_pxigfe.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Brigif 15 Kujang</div>
                        <p>Lingkar, Baros, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40521</p>
                </div>
                <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622993839/Discover%20Cimahi/IMG_20210526_093548_iyajy8.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Lapang Tembak</div>
                        <p> Padasuka, Central Cimahi, Cimahi City, West Java 40531.</p>
                </div>
                <img src="https://res.cloudinary.com/zharcloudapi/image/upload/v1622993926/Discover%20Cimahi/IMG_20210526_134646_mn653z.jpg" alt="">
                <div class="carousel-item-fill"></div>
            </div>
            <div>
                <div class="carousel-item-desc">
                        <div>Masjid Al-Baakhirah</div>
                        <p>Jl. Bapa Ampi No.1E, RT.02/RW.06, Baros, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40521</p>
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