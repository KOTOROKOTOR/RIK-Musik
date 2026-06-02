   <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rik Musik | Official Store</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="logo-section">
            <img src="/images/logorik.jpg" alt="Logo">
            <span class="logo-text" style="color: white; font-weight: 800;">RIK MUSIK</span>
        </div>

        <div class="search-wrapper">
            <i class="fa fa-search mb-3"></i>
            <input type="text" id="searchInput" placeholder="Cari alat musik...">
        </div>

        <div class="nav-right">
            <ul class="nav-links">
                <li><a href="home.html" data-en="Home" data-id="Beranda">Beranda</a></li>
             
                <li class="dropdown">
                  <a class=" dropdown-toggle" href="#products" data-en="Products" data-id="Produk" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produk
                   </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="eg.html">Electric Guitars</a></li>
                        <li><a class="dropdown-item" href="ag.html">Acoustic Guitars</a></li>
                        <li><a class="dropdown-item" href="bass.html">Bass Guitars</a></li>
                        <li><a class="dropdown-item" href="assecories.html">Assecories</a></li>
                    </ul>
                </li>
                <li><a href="service.html" data-en="Service" data-id="Servis">Servis</a></li>
                <li><a href="about.html" style="color: gold;" data-en="About" data-id="Tentang kami">Tentang kami</a></li>
            </ul>
            <button class="lang-btn" onclick="toggleLanguage()">EN / ID</button>
        </div>
    </nav>
<section id="about" class="about-black">
    <div class="about-img">
<img src="/images/logorik.jpg" alt="">
        </div>
        <div class="about-text">
            <h2 data-en="About Us" data-id="Tentang Kami" style="font-family: 'Montserrat'; font-weight: bold;">Tentang Kami</h2>
            <p data-en="Rik Musik is a music store located in Pontianak, West Kalimantan. It sells both new and used musical instruments, as well as offers repairs to bodies, bridges, and necks. Products offered include acoustic guitars, electric guitars, bass guitars, and other musical equipment." data-id="Rik Musik adalah toko alat musik yang berlokasi di Pontianak, Kalimantan Barat. Toko ini melayani jual-beli alat musik, baik baru maupun bekas (second), serta melayani servis alat musik seperti perbaikan bodi, bridge, dan neck. Produk yang ditawarkan meliputi gitar akustik, gitar elektrik, bass, dan perlengkapan musik lainnya.">Rik Musik adalah toko alat musik yang berlokasi di Pontianak, Kalimantan Barat. Toko ini melayani jual-beli alat musik, baik baru maupun bekas (second), serta melayani servis alat musik seperti perbaikan bodi, bridge, dan neck. Produk yang ditawarkan meliputi gitar akustik, gitar elektrik, bass, dan perlengkapan musik lainnya.</p>
        </div>
        
    </section>

<section id="why" class="section">
            <h2 class="section-title" data-en="Why Choose RIK MUSIK?" data-id="Mengapa pilih RIK MUSIK?">Mengapa pilih RIK MUSIK?</h2>

<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative about-black"> 
    <div class="col p-4 d-flex flex-column position-static"> 
        
        <h2 class="mb-2" style="font-family: 'Montserrat'; font-weight: bold; color: gold;" data-en="Our History" data-id="Sejarah Kami">Sejarah Kami</h2> 
      
        <p class="card-text mb-auto"  data-en="Rik Musik started as a studio in Pontianak and has since grown into a trusted music equipment supplier. We offer top brands like ESP, LTD, Cort, and Yamaha, all with 100% authentic quality." data-id="Rik Musik berawal dari sebuah studio di Pontianak yang kemudian berkembang menjadi penyedia peralatan musik terpercaya. Kami menghadirkan brand ternama seperti ESP, LTD, Cort, dan Yamaha dengan kualitas original 100%.">Rik Musik berawal dari sebuah studio di Pontianak yang kemudian berkembang menjadi penyedia peralatan musik terpercaya. Kami menghadirkan brand ternama seperti ESP, LTD, Cort, dan Yamaha dengan kualitas original 100%.</p> 
       
</div> 
<div class="col-auto d-none d-lg-block"> 
    
                <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?q=80&w=400" alt="Music" style="border-radius: 10px; width: 100%; max-width: 400px;">

</div> 
</div>
        </section>
      <footer>
        <p>© 2026 Rik Musik Pontianak</p>
    </footer>
<script src="script.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
</body>
</html>
