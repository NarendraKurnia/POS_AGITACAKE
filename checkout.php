<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Check Out | Agita Cakes</title>
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
height: 80vh; 
">
<main>
	<h1 class="mt-4 mb-5 checkout-title">Checkout</h1>
	<hr>
	 <div class="mt-5 mb-4 card-booked">
            <p class="fw-bold">Menu yang Anda pesan:</p>
            <p class="ms-4 fw-bold">Strawbery crunch chiz Rp.13.500</p>
            <p class="text-muted ms-4"><small>*Total Harga sudah termasuk PPN.</small></p>
            <hr>
            <div class="d-flex justify-content-between">
                <p class="fw-bold">Total:</p>
                <p class="fw-bold">Rp 13.500</p>
            </div>
        </div>

        <div class="text-center mb-5">
            <div class="d-flex justify-content-center gap-4 mt-3">
                <div class="card-option" data-bs-toggle="modal" data-bs-target="#takeAwayModal">
                      <i class="bi bi-arrow-right-square-fill"></i>
                    <p class="fw-bold mt-2">Lanjutkan Pesanan</p>
                </div>
            </div>
        </div>
        <!-- Modal -->
		<div class="modal fade" id="takeAwayModal" tabindex="-1" aria-labelledby="takeAwayModalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-dialog-centered">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="takeAwayModalLabel">Data Customer</h5>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		            </div>
		            <div class="modal-body">
		                <form>
		                    <div class="mb-3">
		                        <label for="name" class="form-label">Nama:</label>
		                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
		                    </div>
		                    <div class="mb-3">
		                        <label for="phone" class="form-label">Nomor HP:</label>
		                        <input type="text" class="form-control" id="phone" placeholder="Masukkan nomor HP Anda">
		                    </div>
		                    <div class="mb-3">
		                        <label for="phone" class="form-label">Masukkan voucher anda (Optional)</label>
		                        <input type="text" class="form-control" id="Voucher" placeholder="Voucher">
		                    </div>
		                </form>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-primary" onclick="window.location.href='payment.php'">Lanjut ke pembayaran</button>
		                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- end modal -->


        <button class="btn btn-cancel w-100 btn-cancel-checkout" href="transaksi.php">Batalkan Pesanan</button>
    </div>
</main>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js"></script>
</body>
</html>