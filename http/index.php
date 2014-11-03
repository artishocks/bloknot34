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
			
			<div class="main-title">
				<span class="big">Издательский дом КНАУБ </span><br>
				<span class="small">рекламно-полиграфическая компания</span>
			</div>
		</div>
	</div>

	<div class="row" id="main">

		<div class="span3 sidebar-wrapper">
			<ul class="nav nav-list">
				<li><a href="/" class="btn nav-button btn-large">Главная</a></li>
				<li><a href="?c=1" class="btn nav-button btn-large">Продукция</a></li>
				<li><a href="?c=2" class="btn nav-button btn-large">Прайс</a></li>
				<li><a href="?c=3" class="btn nav-button btn-large">Тех. условия</a></li>
				<li><a href="?c=4" class="btn nav-button btn-large">Контакты</a></li>
			</ul>
		</div>

		<div class="span9 content-block">
		<?php
			$path = $_SERVER['DOCUMENT_ROOT']."/include/";
			$contentArray = array('main', 'prod', 'price', 'techreq', 'contacts');
			
	        $c = 0;
			if ( !empty( $_GET['c']) && in_array($c, $contentArray) )
			    $c = $_GET['c'];
	     
			require_once($path.$contentArray[$c].".inc");
		?>
		</div>

	</div>



	<!-- <div class="row" id="footer">
			<div class="span12">footer</div>
		</div>-->

	</div> 


	<div class="cstfooter">
		<span class="blue">Надеемся на взаимовыгодное сотрудничество</span>
		<table>
			<tr>
				<td></td>
				<td class="td-middle">Бесплатная доставка 8-909-379-65-68
				<br>
				e-mail: bloknot34@inbox.ru | сайт: блокнот.рф | vk.com/bloknot_34
				</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td class="td-middle">Часы работы: с 8.00 до 17.00. Сб, Воскр - выходные</td>
				<td></td>
			</tr>
		</table>

		<p>Адрес: 404121, г. Волжский, ул. Горького, 41р</p>

	</div>

</div>


	
</body>
</html>