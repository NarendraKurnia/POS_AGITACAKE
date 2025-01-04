<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index | Agita Cakes</title>
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
height: 100vh; 
">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Agita Cakes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">
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
            </ul>
        </div>
    </div>
</nav> 
<main>

	<div class="container d-flex justify-content-center align-items-center mb-5">
		<div class="login-box mt-2 col-md-4 mb-5 mt-4 login-box">
			<div class="info-dasbor">
				<h1>Apa yang akan anda lakukan hari ini</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row col-md-12">
			<div class="col-md-4">
				<a href="transaksi.php" class="card-index-link">
				<div class="card-index card-1 custom-card">
					<i class="bi bi-bag-check-fill icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Transaksi</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4">
				<a href="produk.php" class="card-index-link">
				<div class="card-index card-2 custom-card">
					<i class="bi bi-cart4 icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Produk</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4">
				<a href="diskon.php" class="card-index-link">
				<div class="card-index card-3 custom-card">
					<i class="bi bi-percent icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Diskon</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4 mt-3">
				<div class="card-index card-4 custom-card">
					<a href="voucher.php" class="card-index-link">
					<i class="bi bi-ticket-perforated icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Voucher</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4 mt-3">
				<a href="laporan.php" class="card-index-link">
				<div class="card-index card-5 custom-card">
					<i class="bi bi-book-half icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Laporan</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4 mt-3">
				<a href="member.php" class="card-index-link">
				<div class="card-index card-6 custom-card">
					<i class="bi bi-person-lines-fill icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Member</h5>
					</div>
				</div>
			</a>
			</div>
		</div>
	</div>
		
	</div>
	</main>
	<script>
    function redirectToPage() {
        window.location.href = "index.php";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js"></script>
</body>
</html>