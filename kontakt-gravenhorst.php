<?php
$title = 'Gravenhorst og Scankomposit -Kontakt os.';
$description = 'Gravenhorst producere blæsestøbte hule elementer i plastik og Scankomposit producere pressestøbte elementer i SMC glasfiber. Vi hjælper med ideer, innovation og produktion af plast- og glasfiberemner. Virksomheden er samlet i Sandby på midtsjælland.';
$keywords = 'Plasikfabrik, blæsestøbning, pressestøbning, gravenhorst, scankomposit, kontakt, kort, placering, adresse';
$stylesheet ='assets/css/faelles_style.css';

$page = 'kontakt-gravenhorst';
$subpage = '';
include ('./includes/public-header.php');
?>
  
  
    <aside role="form">
    
    	<?php include_once('./includes/kontaktform.php'); ?>
		
    </aside>
    
  <main>
  
  <section class="hunderet">
    <div class="map-box">
      <div class="map">
      <h4 id="adresse"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;Find Vej</h4>
        <br><p>Sandbyvej 57, 4171 Glumsø</p><br>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2266.7125242069833!2d11.741649316180078!3d55.380472980455494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465290d73b664ded%3A0x14871acd8e9a5e39!2sSandbyvej+57%2C+4171+Glums%C3%B8!5e0!3m2!1sda!2sdk!4v1480934816474" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      </div>
      <div class="map-box">
        <h4 id="adresse"><i class="fa fa-phone"></i>&nbsp;Ring til os</h4><br>
        <p>Der er personale på fabrikken mandag til fredag fra 7.00 til 14.30, og her er det mulight at komme i kontakt med os på telefon.</p>
        <div id="teleform" class="kontaktform">

                <form action="tel://+45--57-64-33-44">
                
                   <input type="submit" class="sendknap" value="+45 54 67 33 44">
                </form>
          </div>
      </div>
        <div class="map-box">
          <h4 id="adresse"><i class="fa fa-envelope-o"></i>&nbsp;Send os en mail</h4>
          <br><p>Uden for normal åbningstid, kan du bruge vores kontakt form, eller sende os en e-mail på</p><br><p><a href="mailto:info@gravenhorst.dk"> info@gravenhorst.dk</a></p>
            <form action="mailto:info@gravenhorst.dk">
              <input type="submit" class="sendknap" value="Send email">
            </form>
            <br><p>(Starter dit e-mail program)</p>
          </div>
      </div>
    </div>
</section>
<section class="dir-box">
          <h4>Direktionen</h4>
          <div class="ejer">
          <div class="direktion">
            <img src="assets/img/susanne.jpg" class="ejer-foto" alt="Foto af Susanne Borggaard">
          <h4>Susanne Borggaard</h4><br>
        
          <p>Direktør for Scankomposit</p><br>
          <p>Cand. Agro.</p><br>
          <p>Formand for Sektionen for ekstrudering og termoformning</p><br>
          <p>Særlig fokus på vejen fra produktion til laget.</P><br>
          <p>Hurtig og effektiv leveringstid</P><br>
          <p class="fed">Tlf. 22 11 75 45</p>
        
      </div>

      <div class="direktion">
          <img src="assets/img/rene.jpg" class="ejer-foto" alt="Foto af Rene Borggaard">
            
            <h4>René Borggaard</h4><br>
          <p>Fabrikant og indehaver af Gravenhorst Plast og Scankomposit</p><br>
          <p> 40 års erfaring i den danske plastbranche</p><br>
          <p>Specifik viden om plastblæsestøbning af teknisk svære emner.</p><br>
          <p>Har løst et utal af opgaver for firmaer i ind- og udland</p><br>
          <p class="fed">Tlf. 40 33 01 06</p>
      </div>
    
      </div>
    
    </section>
  </main>




<?php include_once('./includes/footer.php'); ?>   