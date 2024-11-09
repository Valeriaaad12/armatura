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
                            <div class="col-lg-6 col-md-4">
                                <h1 class="section-title" style="margin-bottom: 30px; font-weight: bold;">
                                    <span>Контакты</span>
                                </h1>
                                <h3 class="section-title" style="margin-bottom: 20px; font-weight: bold;">
                                    <span>ООО «ТПК Яргазарматура»</span>
                                </h3>
                                    <p>Адрес: 150000, г. Ярославль, ул. Свердлова, 4</p>
                                    <p>Телефон/факс: (4852) 73-15-91, 74-57-80, 74-57-87</p>
                                    <p>E-mail: olvo3@yandex.ru</p>
                                </div>
                            <div class="col-lg-6 col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.126116572672!2d39.88144017652011!3d57.62934197383609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b2915dbfcaa21b%3A0x513b11f3b9f54039!2z0YPQuy4g0KHQstC10YDQtNC70L7QstCwLCA0LCDQr9GA0L7RgdC70LDQstC70YwsINCv0YDQvtGB0LvQsNCy0YHQutCw0Y8g0L7QsdC7LiwgMTUwMDAw!5e0!3m2!1sru!2sru!4v1729870361273!5m2!1sru!2sru" 
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                 </section>  
                 <section class="about-us">
                    <div class="container fluid">
                        <div class="row mb-4">
                            <div class="col-lg-6 col-md-4">
                                <h3 class="section-title" style="margin-bottom: 20px; font-weight: bold;">
                                    <span>ООО «Яргазарматура»</span>
                                </h3>
                                    <p>Адрес: 617766, Пермский край, г. Чайковский-6, ул. Декабристов, д.29 </p>
                                    <p>Отдел снабжения: <br> Телефон (34241) 2-87-86</p>
                                    <p>Отдел маркетинга: <br> Телефон (34241) 4-68-25, 2-09-62</p>
                                    <p>E-mail: gaz-arm@mail.ru</p>
                                </div>
                            <div class="col-lg-6 col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2188.4337737606033!2d54.14539898384461!3d56.735516114816434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43e72bebe2bcecc7%3A0x566f0bbf4bb80001!2z0YPQuy4g0JTQtdC60LDQsdGA0LjRgdGC0L7QsiwgMjksINCn0LDQudC60L7QstGB0LrQuNC5LCDQn9C10YDQvNGB0LrQuNC5INC60YDQsNC5LCA2MTc3NjY!5e0!3m2!1sru!2sru!4v1729878194330!5m2!1sru!2sru" 
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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