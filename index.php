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

			<div class="container-fluid my-carousel">
						<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="assets/img/баннер.png" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="assets/img/ocr1.png" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="assets/img/ocr2.png" class="d-block w-100" alt="...">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
			</div> <!-- container-fluid my-carousel -->
			<main class="main" id="baner">
				<div class="container-fluid mb-5" id="baner">
                    <div class="row" id="baner" style="margin-top: 30px; display: flex; justify-content: center">
                        <div class="col-lg-4 col-md-4">
                            <img src="assets/img/здание.jpg" alt="" class="img-thumbnail">
                        </div>
                        <div class="col-lg-4 col-md-8" style="font-family: 'Montserrat';">
                            <h2><b>ПРОДУКЦИЯ</b></h2>
                            <p class="textsmall">Полнопроходные шаровые краны серии ЯГТ широко известны на Российском рынке как высокотехнологичный, надежный и высококачественный вид запорной арматуры. Вся выпускаемая трубопроводная арматура имеет класс герметичности А и подразделяется на: краны шаровые муфтовые, краны шаровые штуцерные, краны шаровые фланцевые, краны шаровые под приварку, краны шаровые с пневмо и пневмогидроприводами.</p>
                            <button class="custom-btn btn-2"><a href="<?php echo BASE_URL . "product.php"; ?>" style="color: aliceblue; text-decoration: none;">Подробнее</a></button>
                        </div>
                    </div>
                </div>
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
