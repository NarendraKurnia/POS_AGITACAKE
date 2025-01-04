<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Transaksi | Agita Cakes</title>
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
				<li class="nav-item">
					<a class="nav-link">
						<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#keranjangModal">
							<i class="bi bi-cart-plus" style="font-size: 1.6rem; margin-left: 10px; margin-top:-330px;"></i>
						</button>
					</a>
				</li>
				<!-- Premium cake Modal -->
				<div class="modal fade" id="keranjangModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<form>
								<div class="modal-header">
									<h5 class="modal-title d-flex align-items-center">
										<i class="bi bi-cart fs-3 me-2"></i> Keranjang
									</h5>
									<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<div class="card mb-3 col-md-12">
											<div class="cart-item">
												<span>Strawbery crunch chiz</span>
												<div class="d-flex align-items-center">
													<button class="btn btn-outline-secondary btn-sm">-</button>
													<input type="text" class="form-control text-center mx-2" value="1" style="width: 50px;" readonly>
													<button class="btn btn-outline-secondary btn-sm">+</button>
													<span class="ms-3">Rp3.000</span>
													<button class="btn-delete ms-3"> <i class="bi bi-trash3"></i></button>
												</div>
											</div>
											<hr>
											<p class="cart-footer">Total Harga sudah termasuk PPN*</p>
											<div class="cart-total">Total Harga: Rp13.500</div>
											<div class="container mt-5">
												<div class="container mt-5">
													<div class="row justify-content-end">
														<div class="card bg-secondary col-md-3 text-center card-check">
															<div class="card-body">
																<a href="checkout.php" class="btn btn-checkout">
																	Checkout <i class="bi bi-pc-display-horizontal ms-2"></i>
																</a>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- End modal -->
</ul>
</div>
</div>
</nav>  
<main>
	<div class="container d-flex justify-content-center align-items-center mb-5">
		<div class="login-box mt-4 col-md-4 mb-2 login-box">
			<div class="info-dasbor">
				<h1>Transaksi</h1>
			</div>
		</div>
	</div>
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
        Premium cakes    
        <button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#premiumModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- Premium cake Modal -->
<div class="modal fade" id="premiumModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/contoh-cake.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Strawbery crunch chiz</h5>
        						<p class="card-text">Rp11.500</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/contoh-cake.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Strawbery crunch chiz</h5>
        						<p class="card-text">Rp11.500</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/contoh-cake.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Strawbery crunch chiz</h5>
        						<p class="card-text">Rp11.500</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
        Classic Cake    
        <button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#classicModal"> <i class="bi bi-plus-circle"></i>
        </button>  
    	</div>
	</div>
	<!-- Classic Modal -->
	<div class="modal fade" id="classicModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/bolu_classic_cheese.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Klasik Keju Wysman</h5>
        						<p class="card-text">Rp200.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/bolu_classic_cheese.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Klasik Keju Wysman</h5>
        						<p class="card-text">Rp200.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
        Whole Cake    
        <button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#wholecakeModal"> <i class="bi bi-plus-circle"></i>
        </button>  
    	</div>
	</div>
		<!-- Whoolecake Modal -->
	<div class="modal fade" id="wholecakeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/wholecake.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Personal Carramel Macchiato cake</h5>
        						<p class="card-text">Rp300.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/bolu_classic_cheese.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Klasik Keju Wysman</h5>
        						<p class="card-text">Rp200.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/bolu_classic_cheese.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Klasik Keju Wysman</h5>
        						<p class="card-text">Rp200.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/bolu_classic_cheese.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Klasik Keju Wysman</h5>
        						<p class="card-text">Rp200.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/bolu_classic_cheese.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Klasik Keju Wysman</h5>
        						<p class="card-text">Rp200.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/bolu_classic_cheese.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Klasik Keju Wysman</h5>
        						<p class="card-text">Rp200.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
        Mini Cake    
        <button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#minicakeModal"> <i class="bi bi-plus-circle"></i>
        </button>  
    	</div>
	</div>
	<!-- minicake Modal -->
	<div class="modal fade" id="minicakeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/triplechocolate.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Triple Chocolate</h5>
        						<p class="card-text">Rp25.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/triplechocolate.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Triple Chocolate</h5>
        						<p class="card-text">Rp25.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Snack Tray (New Look)    
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#snacktrayModal"> <i class="bi bi-plus-circle"></i>
        </button>  
    	</div>
	</div>
	<!-- snacktray Modal -->
	<div class="modal fade" id="snacktrayModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/Paket_Tampah_A.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Paket Tampah A</h5>
        						<p class="card-text">Rp349.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/Paket_Tampah_A.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Paket Tampah A</h5>
        						<p class="card-text">Rp349.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Gift    
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#giftModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- gift Modal -->
	<div class="modal fade" id="giftModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/minichoug.png" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Mini Choux</h5>
        						<p class="card-text">Rp130.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Sweet    
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#sweetModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- sweet Modal -->
	<div class="modal fade" id="sweetModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/Putu_Cakes.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Putu Cakes</h5>
        						<p class="card-text">Rp14.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/Putu_Cakes.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Putu Cakes</h5>
        						<p class="card-text">Rp14.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Savoury    
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#savouryModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- savoury Modal -->
	<div class="modal fade" id="savouryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/minikebab.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Mini Kebab</h5>
        						<p class="card-text">Rp11.500</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/minikebab.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Mini Kebab</h5>
        						<p class="card-text">Rp11.500</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Collaboration    
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#collaborationModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- collaboration Modal -->
	<div class="modal fade" id="collaborationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/vanillacaramel.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Vanilla Caramel</h5>
        						<p class="card-text">Rp16.500</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/vanillacaramel.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Vanilla Caramel</h5>
        						<p class="card-text">Rp16.500</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Bakery    
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#bakeryModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- bakery Modal -->
	<div class="modal fade" id="bakeryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/vanillacaramel.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Vanilla Caramel</h5>
        						<p class="card-text">Rp16.500</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/vanillacaramel.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Vanilla Caramel</h5>
        						<p class="card-text">Rp16.500</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Pastry   
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#pasteryModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- Pastry Modal -->
	<div class="modal fade" id="pasteryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/garliccreamcroissant.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Garlic Cream Croissant</h5>
        						<p class="card-text">Rp39.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/garliccreamcroissant.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Garlic Cream Croissant</h5>
        						<p class="card-text">Rp39.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End modal -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Pudding   
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#pudingModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- Puding Modal -->
	<div class="modal fade" id="pudingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/double-choco.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Double Choco Pudding</h5>
        						<p class="card-text">Rp35.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/double-choco.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Double Choco Pudding</h5>
        						<p class="card-text">Rp35.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- END MODAL -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Traditional   
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#traditionalModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- traditional Modal -->
	<div class="modal fade" id="traditionalModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/sosissolo.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Sosis Solo</h5>
        						<p class="card-text">Rp9.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/sosissolo.jpeg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Sosis Solo</h5>
        						<p class="card-text">Rp9.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- END MODAL -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Meals   
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#mealsModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- traditional Modal -->
	<div class="modal fade" id="mealsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/ANEKA_KLETIKAN_POUCH.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Aneka Kletikan Pouch</h5>
        						<p class="card-text">Rp55.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/ANEKA_KLETIKAN_POUCH.jpg" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Aneka Kletikan Pouch</h5>
        						<p class="card-text">Rp55.000<</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- END MODAL -->
	<div class="container">
    	<div class="row col-md-12 mb-4 premium-cake"> 
       	Drinks   
       	<button type="button" class="btn shadow-none"  data-bs-toggle="modal" data-bs-target="#drinksModal"> <i class="bi bi-plus-circle"></i>
        </button> 
    	</div>
	</div>
	<!-- drinks Modal -->
	<div class="modal fade" id="drinksModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-book fs-3 me-2"></i> Menu
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        	<div class="container-fluid">
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/Koffie-lahKarawan.png" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Koffie-lah Karawan</h5>
        						<p class="card-text">Rp25.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="card mb-3" style="max-width: 540px;">
        			<div class="row g-0">
        				<div class="col-md-4">
        					<img src="images/Koffie-lahKarawan.png" class="img-fluid rounded-start">
        				</div>
        				<div class="col-md-8">
        					<div class="card-body">
        						<h5 class="card-title">Koffie-lah Karawan</h5>
        						<p class="card-text">Rp25.000</p>
        						<div class="quantity">
        							<div class="quantity-container">
        								<button class="quantity-button" id="spinner" onclick="decreaseQuantity(this)">&minus;</button>
        								<input type="text" class="quantity-input" name="jumlah" value="0" min="1">
        								<button class="quantity-button" id="spinner"onclick="increaseQuantity(this)">&plus;</button>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
          	</div>
          <div class="my-1">
            <button type="submit" class="btn btn-primary shadow-none">Tambahkan ke keranjang</button>
            <button type="reset" class="btn btn-danger shadow-none">Reset</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- END MODAL -->

	</main>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js"></script>
</body>
</html>