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
<link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
<link rel="stylesheet" type="text/css" href="./assets/font-awesome-4.5.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
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
    	<img src="./assets/img/faelles_logo.png" class="faelles" class="logo" alt="Gravenhorst og Scankomposit logo">
        <img src="./assets/img/graven_logo.png" class="graven" class="logo" alt="Gravenhoste Plast A/S logo">
        <img src="./assets/img/scan_logo.png" class="scan"  class="logo" alt="Scankomposit A/S logo">
        <h1 class="noshow">Gravenhorst og Scankomposit Plast A/S</h1>
            <!--<section id="tagline"><h2 class="faelles">Blæsestøbte hule emner i plastik &amp; Pressestøbning i SMC glasfiber</h2>-->
            <h2 class="graven">Blæsestøbte hule emner i plastik</h2>
            <h2 class="scan">Pressestøbning i SMC glasfiber</h2>
            <!--<p>Vi hjælper med ideer, innovation og produktion af plast- og glasfiberemner</p>-->
            <h2 class="noshow">Blow molding in plastic. Compression molding in SMC.</h2>
            </section>
    		<section id="telefon"><h2><i class="fa fa-phone"></i>   +45 57 64 33 44</h2></section>
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
	
   