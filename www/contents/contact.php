<div class="wrapper wrapper-style3">
  <article id="contact">
    <header>
      <h2>Kontakt</h2>
      <!--<span></span>--> 
    </header>
    <div class="5grid-layout">
      <div class="row">
        <div class="8u">
          <div class="google-map-wrapper"><!-- here is place for google map, which is added by javascript due resizing --></div>
        </div>
        <div class="4u contact">
        
          <div class="headline"></div>
          <div><h3>GSgeodet</h3></div>
          
          <div class="headline"><strong>Telefon:</strong></div>
          <div class="tel">+420 603 828 890</div>
          <div class="tel">+420 774 069 036</div>
          
          <div class="headline"><strong>E-mail:</strong></div>
          <div class="mail"><a href="mailto:info@gsgeodet.cz">info@gsgeodet.cz</a></div>
        
          <div class="headline"><strong>Adresa:</strong></div>
          <div>17. listopadu 1185</div>
          <div>Mladá Boleslav 293 01</div>
  
          <div class="headline"></div>
          <div><strong>IČ:</strong> 023 38 459</div>
          <div><strong>DIČ:</strong> CZ7911190936</div>
        </div>
      </div>
      <div class="row row-special">
        <div class="12u">
          <h3>K nalezení jsme také na sociálních sítích...</h3>
          <ul class="social">
            <li class="facebook"><a href="https://www.facebook.com/pages/GSgeodet/472002702911359">Facebook</a></li>
            <!--<li class="twitter"><a href="#">Twitter</a></li>
            <li class="dribbble"><a href="#">Dribbble</a></li>
            <li class="linkedin"><a href="#">LinkedIn</a></li>
            <li class="tumblr"><a href="#">Tumblr</a></li>
            <li class="googleplus"><a href="#">Google+</a></li>-->
          </ul>
        </div>
      </div>
    </div>
    <footer>
      <p>Kontaktovat nás můžete i pomocí formuláře...</p>
      <a href="#contactForm" class="button button-big">Přejít na kontaktní formulář</a> </footer>
  </article>
</div>


<!--<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=17.%20listopadu%201185%20mlada%20boleslav&key=AIzaSyD0LV8qBZoqZ5HN3t8dWnT31pOt6zBaj6k" width="600" height="450"></iframe>-->

<script type="text/javascript">
    var container_width_current = null;

    $(window).bind("load resize", function(){    
         var container_width_new = $('.google-map-wrapper').width();
                   
         if (!container_width_current || (container_width_new != container_width_current)) {
             container_width_current = container_width_new;
             var height = $('.google-map-wrapper').height();
             $('.google-map-wrapper').html('<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=17.%20listopadu%201185%20mlada%20boleslav&key=AIzaSyD0LV8qBZoqZ5HN3t8dWnT31pOt6zBaj6k" '
             + ' width="' + container_width_new + '" height="' + height + '"></iframe>');
         }
    });
</script>

