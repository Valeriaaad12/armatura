<header class="header">
				<div class="header-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-2">
								<div class="header-top-logo">
									<a href="<?php echo BASE_URL ?>" class="active"><img src="assets/img/логотип.png" alt=""></a>
								</div>
							</div>
							<div class="col-md-10">
								<nav> 
									<ul class="navbar-menu"> 
										<li><a href="<?php echo BASE_URL . "index.php"; ?>" class="active">Главная</a></li> 
										<li><a href="<?php echo BASE_URL . "product.php"; ?>">Продукция</a></li> 
										<li><a href="<?php echo BASE_URL . "proizvodstvo.php"; ?>">Производство</a></li> 
										<li><a href="<?php echo BASE_URL . "realiz.php"; ?>">Реализация</a></li> 
										<li><a href="<?php echo BASE_URL . "contact.php"; ?>">Контакты</a></li> 
										<li class="nav-item dropdown">
											<?php if (isset($_SESSION['id'])): ?>
												<a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
													<?php echo $_SESSION['login']; ?>
												</a>
												<ul class="dropdown-menu">
													<?php if ($_SESSION['admin']): ?>
													<li><a class="dropdown-item" href="#" style="width:auto;">Админ панель</a></li>
													<?php endif; ?>
													<li><a class="dropdown-item" href="<?php echo BASE_URL . "logout.php"; ?>" style="width:auto;">Выход</a></li>
													<li><hr class="dropdown-divider"></li>
												</ul>
											<?php else: ?>	
												<a class="nav-link dropdown" href="log.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
													Войти
												</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo BASE_URL . "log.php"; ?>" style="width:auto;">Авторизация</a></li>
													<li><hr class="dropdown-divider"></li>
													<li><a class="dropdown-item" href="<?php echo BASE_URL . "reg.php"; ?>" style="width:auto;">Регистрация</a></li>
												</ul>
											<?php endif; ?>
											
										</li>

									</ul> 
									<div class="done1">
										<div class="dropdown">
											<a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
											<b>Меню</b>
											</a>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<li><a class="dropdown-item" href="index.php">Главная</a></li>
											<li><a class="dropdown-item" href="product.php">Продукция</a></li>
											<li><a class="dropdown-item" href="proizvodstvo.php">Производство</a></li>
											<li><a class="dropdown-item" href="realiz.php">Реализация</a></li>
											<li><a class="dropdown-item" href="contact.php">Контакты</a></li>
											<li><a class="dropdown-item" href="reg.php">Регистрация</a></li>
											</ul>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
</header>

<style>
	
</style>