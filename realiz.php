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
                                    <span>ООО «ТПК Яргазарматура»</span>
                                </h2>
                                    <p>ООО «ТПК Яргазарматура» специализируется на поставках трубопроводной арматуры российского и импортного производства. Основной задачей компании является реализация шаровых кранов производства ООО «Яргазарматура», при этом наша компания выполняет функции торгового дома указанного производителя.</p>
                                    <p>Шаровые краны серии ЯГТ широко известны как высокотехнологичный, надежный и высококачественный вид запорной арматуры. Потребителями продукции являются не только практически все газотранспортные и газодобывающие предприятия ПАО «Газпром», но и многие другие крупные российские предприятия. Также следует отметить стабильное увеличение поставок в страны ближнего и дальнего зарубежья: Белоруссию, Украину, Казахстан, Литву, Индию.</p>
                                    <p>По нашему мнению, сегмент шаровых кранов имеет по-прежнему значительный потенциал роста, несмотря на существующую здесь высокую конкуренцию среди производителей и поставщиков.</p>
                                    <p>Дополнительно к изделиям трубопроводной арматуры, мы также поставляем различные крепежные изделия, такие как  шпильки, гайки, болты, фланцы, различные крышки, заглушки, металлические прокладки и другие изделия.</p>  
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