<?php
$title = 'Gravenhorst A/S og Scankomposit A/S - Galleri';
$description = 'Gravenhorst producere blæsestøbte hule elementer i plastik og Scankomposit producere pressestøbte elementer i SMC glasfiber. Vi hjælper med ideer, innovation og produktion af plast- og glasfiberemner. Virksomheden er samlet i Sandby på midtsjælland.';
$keywords = 'Plasikfabrik, blæsestøbning, pressestøbning, gravenhorst, scankomposit, galleri, billeder, produkter';
$stylesheet ='assets/css/faelles_style.css';

$page = 'galleri';
$subpage = '';
include ('./includes/public-header.php');
?>
  
  
    <aside role="form">
    
    	<?php include_once('./includes/kontaktform.php'); ?>
		
    </aside>
    
<main>
	<div class="galleri">

        <?php

        //hent billederne i databasen

        $query = "SELECT * FROM photos";
        $result = mysqli_query($forbind, $query);
        $num = mysqli_num_rows($result);

        if ($num > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                if ($row['photo_alt'] === null) {
                    $alt = 'Billeder af vores produkter og lokaler';
                } else {
                    $alt = $row['photo_alt'];
                }

                if ($row['photo_format'] == 1) {
                    $class='fotoBredt';
                } else {
                    $class = 'fotoHojt';
                }

                echo '
                    <div class="gallery-box">
			            <img src="./assets/img/uploads/'.$row['photo_link'].'" class="'.$class.'" alt="'.$alt.'">
	            	</div>

                
                ';

        }

        }
        ?>

	</div>

</main>




<?php include_once('./includes/footer.php'); ?>   