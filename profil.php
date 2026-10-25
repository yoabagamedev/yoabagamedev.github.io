<?php 
// sona waktu
date_default_timezone_set('Asia/Makassar');

//isi profil
$nama       = "I Putu Yogi Abanditya Putra";          
$panggilan  = "Yogi";
$peran      = "Rekayasa Sistem Komputer";
$tahunLahir = 2002;
$kota       = "Badung"; 

//Sklil 

$skill1       = "Pemrograman Web"; 
$skill2       = "Cyber Security"; 
$skill3       = "Protokol IoT"; 
$skill4       = "Desain Grafis"; 
$skill5       = "Marketing"; 
$skill6       = "Leadership"; 

// kontak profil
$email      = "yogirskcv@gmail.com";
$subject = rawurlencode("Halo <?php echo $panggilan; ?>");
$body = rawurlencode("Saya ingin bertanya tentang...");
$telepon    = "083119202082";

// Menghitung umur dari tahun lahir
$tahunSekarang = (int) date('Y');
$umur          = $tahunSekarang - $tahunLahir;

// Menentukan sapaan berdasarkan jam sekarang (0-23)
$jam = (int) date('H');

if ($jam >= 4 && $jam < 11) {
    $sapaan = "Selamat pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat siang";
} elseif ($jam >= 15 && $jam < 18) {
    $sapaan = "Selamat sore";
} else {
    $sapaan = "Selamat malam";
}

// Status: masih remaja atau sudah dewasa (operator ternary)
$kategoriUmur = ($umur >= 18) ? "dewasa" : "remaja";

// Tanggal hari ini dalam format 13-10-2026
$tanggalHariIni = date('d-m-Y');

?>


<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="logosaya.png" />
    <title>CV - <?php echo $panggilan; ?></title>

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- Navigasi -->
    <header>
      <nav>
        <h2 class="logo">Portofolio <?php echo $panggilan; ?></h2>

        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#skill">Skill</a></li>
          <li><a href="#project">Proyek</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </nav>
    </header>

    <!-- Halaman Utama -->
    <section id="home" class="hero">
      <div class="hero-text">
        <img
          src="myfoto.png"
          alt="Foto I Putu Yogi Abanditya Putra"
          class="profile-photo"
        />

        <h1><?= $sapaan ?>, nama saya</h1>
        <h1><?php echo $nama; ?></h1>

        <h3>Web Developer | Cyber Security Enthusiast</h3>

        <p>
          Saya adalah pribadi <?php echo $kategoriUmur; ?> yang tertarik pada teknologi, pemrograman web,
          keamanan siber, dan Internet of Things. Saya senang mempelajari
          hal-hal baru serta mengembangkan keterampilan untuk membuat proyek
          yang bermanfaat.
        </p>

        <a href="#about" class="btn">Kenali Saya</a>
      </div>
    </section>

    <!-- Tentang Saya -->
    <section id="about" class="section">
      <h2>Tentang Saya</h2>

      <p>
          Perkenalkan, saya <?php echo $nama; ?>,
          berusia <?php echo $umur; ?> tahun. 
          Saya memiliki minat di bidang teknologi informasi, khususnya
          pengembangan website, keamanan siber (cybersecurity), dan
          Internet of Things (IoT). Saya ingin terus belajar,
          mengembangkan keterampilan, serta menambah pengalaman melalui
          berbagai proyek yang kreatif dan inovatif.
      </p>

    </section>

    <!-- Skill -->
    <section id="skill" class="section">
      <h2>Skill Saya</h2>

      <div class="skill">
        <div class="card"><?php echo $skill1; ?></div>
        <div class="card"><?php echo $skill2; ?></div>
        <div class="card"><?php echo $skill3; ?></div>
        <div class="card"><?php echo $skill4; ?></div>
        <div class="card"><?php echo $skill5; ?></div>
        <div class="card"><?php echo $skill6; ?></div>
      </div>
    </section>

    <!-- Proyek -->
    <section id="project" class="section">
      <h2>Proyek Saya</h2>

      <div class="projects">
        <div class="card">
          <h3>Website Pertama</h3>
          <p>
            Website sederhana yang dibuat menggunakan HTML sebagai dasar
            pengembangan web.
          </p>
        </div>

        <div class="card">
          <h3>Desain Landing Page</h3>
          <p>
            Desain halaman website menggunakan CSS untuk mengatur tampilan dan
            tata letak.
          </p>
        </div>

        <div class="card">
          <h3>Website Portofolio</h3>
          <p>
            Website pribadi untuk memperkenalkan profil, keterampilan, dan
            proyek yang saya kerjakan.
          </p>
        </div>
      </div>
    </section>
    

    <!-- Kontak -->
    <section id="kontak" class="section">
      <h2>Hubungi Saya</h2>

      <p>Nomor: <?php echo $telepon; ?> </p>
      <p>Email: <?php echo $email; ?></p>

    <a href="mailto:<?php echo $email; ?>?subject=<?php echo rawurlencode($subject); ?>&body=<?php echo rawurlencode($body); ?>" class="btn">
    Kirim Email
    </a>
    </section>

    <!-- Footer -->
    <footer>
      Halaman ini dibuat dengan PHP &middot; Diakses pada <?= $tanggalHariIni ?>, pukul <?= date('H:i') ?> WITA
        <br>&copy; <?= $tahunSekarang ?> <?= $nama ?>
  </body>
</html>
