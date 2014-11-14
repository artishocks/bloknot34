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

				<div id="main-menu">
					<ul class="nav nav-pills">
					  <li class="active"><a href="?c=0">Главная</a></li>
					  <li><a href="?c=1">Наши услуги</a></li>
					  <li><a href="?c=2">Технические условия</a></li>
					  <li><a href="?c=3">Прайс</a></li>
					  <li><a href="?c=4">Контакты</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> 

	<?php
			$path = $_SERVER['DOCUMENT_ROOT']."/include/";
			$contentArray = array('main', 'prod', 'techreq', 'price', 'contacts');
			
	        $c = 0;
			if ( !empty( $_GET['c']) && in_array($c, $contentArray) )
			    $c = $_GET['c'];
	     
			require_once($path.$contentArray[$c].".inc");
	?>			

	<div class="container centered">
		Надеемся на взаимовыгодное сотрудничество
	</div>

	<div id="narrow" class="ftr">
		<div class="container">
			
		</div>
	</div>

	<div class="ftr">
		<div class="container">					
			<div class="phone">8 909-379-65-68</div>
			<p>e-mail: <a href="mailto:bloknot34@inbox.ru">bloknot34@inbox.ru</a> | <a href="http://vk.com/bloknot_34">vk.com/bloknot_34</a></p>
			<p>Часы работы: с&nbsp;8:00 до&nbsp;17:00. Сб,&nbsp;Вc&nbsp;&mdash; выходные</p>
		</div>
	</div>
</div>
	
</body>
</html>