<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Voucher | Agita Cakes</title>
    <!-- icon -->
    <link rel="icon" href="images/icon3.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@master/devicon.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <!-- css custom -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="script.js" defer></script>
</head>
<body style="
background-image: url('images/bg-index.png'); 
background-size: cover; 
background-position: center; 
background-repeat: no-repeat; 
margin: 0; 
height: 100vh; 
">
<main>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Agita Cakes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link">
                        Hai (user)
                        <i class="bi bi-person-fill ms-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        Logout
                        <i class="bi bi-box-arrow-in-right"></i>
                    </a>
                </li>
            </form>
        </div>
    </div>
    <!-- End modal -->
</ul>
</div>
</div>
</nav>
<div class="container my-5">
        <h4 class="mb-4">Diskon</h4>
    </div>  
<div class="menu-container-3">
     <!-- product start -->
     <div class="container-product" data-bs-toggle="modal" data-bs-target="#takeAwayModal">
                <button class="btn btn-succes"><i class="fa fa-plus"></i>Tambah Voucher</button>
    </div>
    <!-- Modal -->
        <div class="modal fade" id="takeAwayModal" tabindex="-1" aria-labelledby="takeAwayModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="takeAwayModalLabel">Tambah Voucher</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Voucher:</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama Voucher:">
                            </div>
                            <div class="mb-3">
                                <label for="categorie" class="form-label">Categorie</label>
                                <input type="text" class="form-control" id="categore" placeholder="Categorie">
                            </div>
                            <div class="mb-3">
                                <label for="minimum" class="form-label">Minimal Belanja</label>
                                <input type="text" class="form-control" id="minimum" placeholder="Minimal Belanja">
                            </div>
                            <div class="mb-3">
                                <label for="periode" class="form-label">Periode</label>
                                <input type="text" class="form-control" id="periode" placeholder="Periode Voucher">
                            </div>
                            <div class="mb-3">
                                <label for="kodevoucher" class="form-label">Kode Voucher</label>
                                <input type="text" class="form-control" id="kodevoucher" placeholder="Kode Voucher">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="window.location.href='voucher.php'">Tambah voucher</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
         <div class="row">
            <!-- produk -->
             <div class="col-md-4">
                <div class="container my-4">
                    <div class="promo-card">
                      <div class="label">Rekomendasi</div>
                      <div class="icon-section">
                        <!-- <img src="https://via.placeholder.com/40" alt="Icon"> -->
                        <div>SEMUA KATEGORI</div>
                      </div>
                      <div class="text-section">
                        <h5>Diskon 25% s/d Rp300RB</h5>
                        <p>Min. Blj Rp70RB</p>
                        <p class="mb-0">sisa: 2 hari</p>
                      </div>
                      <div class="checkmark" id="copyButton"><i class="bi bi-copy"></i></div>
                        <input type="text" id="hiddenText" value="TAHUNBARU2025" readonly>
                        <div id="copyAlert" class="alert alert-success d-none" role="alert">
                            Teks berhasil disalin!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container my-4">
                    <div class="promo-card">
                      <div class="label">Rekomendasi</div>
                      <div class="icon-section">
                        <!-- <img src="https://via.placeholder.com/40" alt="Icon"> -->
                        <div>SEMUA KATEGORI</div>
                      </div>
                      <div class="text-section">
                        <h5>Diskon 10% s/d Rp500RB</h5>
                        <p>Min. Blj Rp100RB</p>
                        <p class="mb-0">sisa: 6 hari</p>
                      </div>
                      <div class="checkmark" id="copyButton"><i class="bi bi-copy"></i></div>
                        <input type="text" id="hiddenText" value="MERDEKA9500" readonly>
                        <div id="copyAlert" class="alert alert-success d-none" role="alert">
                            Teks berhasil disalin!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container my-4">
                    <div class="promo-card">
                      <div class="label">Rekomendasi</div>
                      <div class="icon-section">
                        <!-- <img src="https://via.placeholder.com/40" alt="Icon"> -->
                        <div>SEMUA KATEGORI</div>
                      </div>
                      <div class="text-section">
                        <h5>Diskon 2% s/d Rp500RB</h5>
                        <p>Min. Blj Rp40RB</p>
                        <p class="mb-0">sisa: 10 hari</p>
                      </div>
                      <div class="checkmark" id="copyButton"><i class="bi bi-copy"></i></div>
                        <input type="text" id="hiddenText" value="AGITA8766" readonly>
                        <div id="copyAlert" class="alert alert-success d-none" role="alert">
                            Teks berhasil disalin!
                        </div>
                    </div>
                </div>
            </div>
         </div>
</div>
<div class="container mb-3">
    

</div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js"></script>
    <script>
    document.querySelectorAll('.checkmark').forEach(button => {
    button.addEventListener('click', function () {
        // Cari elemen input tersembunyi terkait di dalam kartu ini
        const hiddenText = this.parentElement.querySelector('input[type="text"]');
        if (hiddenText) {
            // Pilih teks dan salin ke clipboard
            hiddenText.select();
            hiddenText.setSelectionRange(0, 99999); // Untuk perangkat mobile
            navigator.clipboard.writeText(hiddenText.value).then(() => {
                // Tampilkan alert sukses
                const copyAlert = this.parentElement.querySelector('.alert');
                if (copyAlert) {
                    copyAlert.classList.remove('d-none');
                    setTimeout(() => {
                        copyAlert.classList.add('d-none');
                    }, 2000);
                }
            }).catch(err => {
                console.error('Gagal menyalin teks:', err);
            });
        }
    });
});
</script>
</body>
</html>