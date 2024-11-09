<?php 
    include("path.php");
    include("app/controllers/users.php"); 
?>
<!Doctype html>
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
            <div class="reg_form">
            <div class="container reg_form" id="reg_form">
                <form action="reg.php" class="row justify-content-center" method="post">
                    <h2 style="text-align:center; margin: 20px 15px 0px 0px; font-family: 'Montserrat1';">Форма регистрации</h2>
                    <div class="mb-3 col-12 col-md-4 err">
                        <p><?=$errMsg?></p>
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                        <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите Ваш логин...">
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" ariaaria-describedby="emailHelp" placeholder="Введите Ваш email...">
                        <div id="emailHelp" class="form-text">Ваш email адрес не будет использован для спама!</div>
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите Ваш пароль...">
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите Ваш пароль...">
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-4">
                        <button type="submit" class="btn btn-secondary" name="button-reg">Регистрация</button>
                        <a href="log.php">Авторизация</a>
                    </div>
                </form>
            </div>
            </div>
        <style>
        form div.err{
            color: red;
            font-style: italic;
            font-size: 1rem;
        }
        .form-label{
            color: black;
            font-family: 'Montserrat1'; 
        }
        .reg_form{
            font-family: 'Montserrat'; 
        }
        .reg_form a{
            font-size: 1.2em;
            transition: all .3s;
            color: #5c5b5b;
            text-decoration: none;
            margin-left: 60px;
        }
        .reg_form a:hover{
            transition: all .3s;
            margin-left: 55px;
        }
        </style>
        </div>
        <?php include("app/include/footer.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>