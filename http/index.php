<?
    $contentArray = array(
        'main' => 'Главная',
        'prod' => 'Наши услуги',
        'techreq' => 'Технические условия',
        'price' => 'Прайс-лист',
        'contacts' => 'Контакты'
    );
    $c = 'main';
    if ( !empty($_GET['c']) && in_array($_GET['c'], array_keys($contentArray)) )
        $c = $_GET['c'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Рекламно-полиграфическая компания &laquo;Блокнот34&raquo;</title>
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
		<div class="row">
			<div class="span12" id="header">				
				<div id="main-title">
					<h1>Блокнот&nbsp;34</h1>
                    <h2>рекламно-полиграфическая компания</h2>
				</div>
			</div>
            <div class="cntr">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container text-center">
                        <div id="main-menu">
                            <ul class="nav nav-pills">                                
                                <?
                                    foreach ( $contentArray as $key => $val ) {
                                        $isActive = ($key == $c) ? ' class="active"' : '';
                                        echo '<li' . $isActive . '><a href="?c=' . $key . '">' . $val . '</a></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
		</div>        
	</div>

	<?
        $path = $_SERVER['DOCUMENT_ROOT'] . "/include/";			

        require_once($path . $c . ".inc");
	?>			

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