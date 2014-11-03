<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Издательский дом КНАУБ</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link href='http://fonts.googleapis.com/css?family=Russo+One&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/lightbox.min.js" type="text/javascript"></script>
</head>

<body>
<div class="wrapper">	
	<div class="container">
		<div class="row" id="header">
			<div class="span12">
				
				<div id="main-title">
					<span id="big-title">Издательский дом &laquo;Кнауб&raquo;</span><br>
					<span id="small-title">рекламно-полиграфическая компания</span>
				</div>
			</div>
		</div>
	</div> 

	
	<?php
			$path = $_SERVER['DOCUMENT_ROOT']."/include/";
			$contentArray = array('main', 'prod', 'price', 'techreq', 'contacts');
			
	        $c = 0;
			if ( !empty( $_GET['c']) && in_array($c, $contentArray) )
			    $c = $_GET['c'];
	     
			require_once($path.$contentArray[$c].".inc");
	?>			


	<div class="ftr">
		<div class="container">
			<p>Надеемся на взаимовыгодное сотрудничество</p>
			
			<p>Бесплатная доставка 8-909-379-65-68</p>
			
			<p>e-mail: bloknot34@inbox.ru | сайт: блокнот.рф | vk.com/bloknot_34</p>
		</div>
	</div>

	<div class="ftr">
		<div class="container">
			<p>Часы работы: с 8.00 до 17.00. Сб, Воскр - выходные <br>
			Адрес: 404121, г. Волжский, ул. Горького, 41р</p>
		</div>
	</div>

</div>
	
</body>
</html>