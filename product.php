<?php include("path.php"); 
		include("app/database/db.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Яргазарматура</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
	</head>
	<body>
		<div class="wrapper">
        <?php include("app/include/header.php"); ?>

			<main class="main">
                <section class="featured-products">
                    <div class="container"> 
                        <!-- style="margin-left: 0!important; margin-right: 0!important;" -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <h2 class="section-title" style="font-family: 'Montserrat1';">
                                    <span>Наша продукция</span>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран1.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые муфтовые разборные</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран2.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые муфтовые цельносварные</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран3.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые штуцерные разборные</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран4.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые штуцерные неразборные</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран5.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые под приварку разборные</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран6.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые под приварку цельносварные</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран7.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые фланцевые разборные</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран8.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые фланцевые цельносварные</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран9.png" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые с пневмоприводами</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3" style="max-width: 300px;">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="assets/img/кран9.png" alt="" style="margin: 0 auto; display: block;">
                                    </div>
                                    <div class="product-details">
                                        <h4>Краны шаровые с пневмогидроприводами</h4>
                                    </div>
                                    <div class="product-links m-3">
                                        <a href="#" class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
			<?php include("app/include/footer.php"); ?>
		</div>
        <button id="top">
            <i class="fa-solid fa-arrow-up"></i>
        </button>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>