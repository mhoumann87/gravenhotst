<?php 
	require_once('funktioner.php');
?>	

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo$title; ?></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="description" content="<?php echo $description; ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
<link rel="stylesheet" type="text/css" href="./assets/font-awesome-4.5.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	//sletter feltet website i kontaktforman, brugen som "honeypot" for at fjerne noget spam
	$(document).ready(function(e) {
		$('.slet').css('display','none');
	});
</script>
<script src="./assets/js/doubleTapToGo.js" type="text/javascript"></script>
<script src="./assets/js/script.js" type="text/javascript"></script>


</head>

<body>

	<header id="header" role="heading">
        <div class="headerBox">
            <?php
                if ($stylesheet == 'assets/css/faelles_style.css') {
                  echo '  <div class="logoBox"><img src="./assets/img/faelles_logo_lang.png" class="logo" alt="Gravenhorst og Scankomposit logo"></div>
                          <div class="teleBox"><h4><i class="fa fa-phone"></i>&nbsp;+45 57 64 33 44</h4></div>
                    ';
                } elseif ($stylesheet == 'assets/css/graven-style.css') {
                    echo '
                        <div class="logobox"><img src="./assets/img/graven_logo.png"  class="logo" alt="Gravenhoste Plast A/S logo"></div>
                        <div class="taglineBox"><h4>Blæsestøbte hule emner i plastik</h4></div>
                        <div class="teleBox"><h4><i class="fa fa-phone"></i>&nbsp;+45 57 64 33 44</h4></div>
                    ';
                } else {
                    echo '
                        <div class="logobox"><img src="./assets/img/scan_logo.png" class="logo" alt="Scankomposit A/S logo"></div>
                        <div class="taglineBox"><h4>Pressestøbning i SMC glasfiber</h4></div>
                        <div class="teleBox"><h4><i class="fa fa-phone"></i>&nbsp;+45 57 64 33 44</h4></div>
                        ';
                }

            ?>
        </div>
        <h2 class="noshow">Blow molding in plastic. Compression molding in SMC.</h2>
        <h1 class="noshow">Gravenhorst og Scankomposit Plast A/S</h1>
    </header>
    
       		
           <nav id="nav" role="navigation">
  
  		  	<a href="#nav" title="Show navigation"><i class="fa fa-bars"></i></a>
    	  	<a href="#" title="Hide navigation"><i class="fa fa-times"></i></a>
   
   			<ul>
        		<li><a <?php echo ($page == 'index') ? "class='active'" : ""; ?> href="./index.php">Forside</a></li>
        		<li><a <?php echo ($page == 'gravenhorst-plast-as') ? "class='active'" : ""; ?> href="./gravenhorst-plast-as.php" aria-haspopup="true">Gravenhorst <i class="fa fa-caret-down"></i></a>
            		
                    <ul>
                		<li><a <?php echo ($subpage == 'gylle-flyder') ? "class='active'" : ""; ?> href="./gravenhorst-plast-as.php#gylle-flyder">Gylle flyder</a></li>
                        <li><a <?php echo ($subpage == 'stole') ? "class='active'" : ""; ?> href="./gravenhorst-plast-as.php#stole">Stole</a></li>
                		<li><a <?php echo ($subpage == 'tekniske-emner') ? "class='active'" : ""; ?> href="./gravenhorst-plast-as.php#tekniske-emner">Tekniske emner</a></li>
                		<li><a <?php echo ($subpage == 'kantpaele') ? "class='active'" : ""; ?> href="./gravenhorst-plast-as.php#kantpaele">Kantpæle</a></li>
                        <li><a <?php echo ($subpage == 'katalog') ? "class='active'" : ""; ?> href="./gravenhorst-plast-as.php#flasker-dunke
                        ">Flasker og dunke</a></li>
            		</ul>
        		</li>
        
        		<li><a <?php echo ($page == 'scankomposit-as') ? "class='active'" : ""; ?> href="./scankomposit-as.php" aria-haspopup="true">Scankomposit <i class="fa fa-caret-down"></i></a>
            		
                    <ul>
            	
                		<li><a <?php echo ($subpage == 'lampeskaerm') ? "class='active'" : ""; ?> href="./scankomposit-as.php#lampeskaerm">Lampeskærm</a></li>
            			<li><a <?php echo ($subpage == 'kk1-stol') ? "class='active'" : ""; ?> href="./scankomposit-as.php#kk1-stol">KK 1 Stol</a></li>
            			<li><a <?php echo ($subpage == 'ventil-gas-skabe') ? "class='active'" : ""; ?> href="./scankomposit-as.php#ventil-gas-skabe">Ventil- og gasskabe</a></li>
                		<li><a <?php echo ($subpage == 'postkasse') ? "class='active'" : ""; ?> href="./scankomposit-as.php#postkasse">Postkasse</a></li>
                		<li><a <?php echo ($subpage == 'vejbelysning') ? "class='active'" : ""; ?> href="./scankomposit-as.php#vejbelysning">Vejbelysning</a></li>
                        <li><a <?php echo ($subpage == 'lysamatur') ? "class='active'" : ""; ?> href="./scankomposit-as.php#lysamatur">Lysamatur</a></li>
                		<li><a <?php echo ($subpage == 'scankomposit-tekniske-emner') ? "class='active'" : ""; ?> href="./scankomposit-as.php#scankomposit-tekniske-emner">Tekniske emner</a></li>
                        <li><a <?php echo ($subpage == 'bakelit-phenol') ? "class='active'" : ""; ?> href="./scankomposit-as.php#bakelit-phenol">Bakelit og Phenol</a></li>
            		</ul>
        		</li>
    				<li><a <?php echo ($page == 'galleri') ? "class='active'" : ""; ?> href="./galleri.php">Galleri</a></li>	    
  	      	<li><a <?php echo ($page == 'kontakt-gravenhorst') ? "class='active'" : ""; ?> href="./kontakt-gravenhorst.php">Kontakt</a></li>
    
    	</ul>
	
    </nav>
	
   