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
			<main>
                <section class="about-us">
                    <div class="container fluid">
                        <div class="row mb-4">
                            <div class="col-lg-8 col-md-6">
                                <h2 class="section-title" style="margin-bottom: 20px; font-weight: bold;">
                                    <span>ООО «Яргазарматура»</span>
                                </h2>
                                    <p>Предприятие специализируется на производстве полнопроходных шаровых кранов класса герметичности А в соответствии с собственными ТУ 37 4220-001-12673402-98. На сегодняшний момент номенклатурный ряд производимых кранов составляет до Ду 300 мм.</p>
                                    <p>Также на предприятии разработана конструкция шаровых кранов, предназначенных для эксплуатации в условиях повышенного содержания сероводорода, разрабатывается конструкция шаровых кранов-регуляторов. Выпускаемая трубопроводная арматура включена в «Реестр поставщиков оборудования ОАО Газпром» на основании экспертного заключение ДОАО «Оргэнергогаз» о соответствии продукции техническим условиям СТО ОАО Газпром и техническим требованиям ОАО Газпром № 03/0800/1-5232 от 29.09.2009.</p>
                                    <p>Имеющееся высокотехнологичное оборудование также позволяет изготавливать широкий спектр различной нестандартной продукции, предназначенной для эксплуатации в условиях высокого давления рабочей среды: в частности, фланцевые поворотные заглушки Ду до 400 мм, Ру до 16 МПа; фланцы, заглушки, крышки, кольца и металлические прокладки различных диаметров, крепежные изделия и другую продукцию.</p>
                                    <div class="embed-responsive embed-responsive-16by9">        
                                        <iframe style="margin-top: 30px; margin-bottom: 20px;" src="https://www.youtube.com/embed/UR-muiG1oA4" width="100%" height="392" title="Презентация Яргазарматура" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                            </div>
                            <div class="col-lg-4 col-md-2">
                                <div class="text123">
                                    <img style="padding: 5px;" src="assets/img/справа1.png" alt="">
                                    <img style="padding: 5px;" src="assets/img/справа2.png" alt="">
                                    <img style="padding: 5px;" src="assets/img/справа3.png" alt="">
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