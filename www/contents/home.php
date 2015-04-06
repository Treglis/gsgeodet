<div class="wrapper wrapper-style1 wrapper-first">
  <article class="5grid-layout" id="home">
    <div class="row">
      <div class="4u"> <span class="logo image image-full"><img src="images/logo.png" alt=""></span> </div>
      <div class="8u">
        <header>
          <h1> <strong>Geodetické práce</strong></h1>
        </header>
        <p>Vítáme Vás na stránkách společnosti <strong>GSgeodet</strong>.</p>
        <a href="#services" class="button button-big">Podívejte se, co nabízíme</a> 
      </div>
      <div>    
        <div class="fb-like-wrapper">
           <!-- here is place for fb widget, which is added by javascript due resizing -->
        </div>
      </div>
    </div>
  </article>
</div>

<script type="text/javascript">
    var container_width_current = null;

    $(window).bind("load resize", function(){    
         var container_width_new = $('.fb-like-wrapper').width();
                   
         if (!container_width_current || (container_width_new != container_width_current)) {
             container_width_current = container_width_new;

             $('.fb-like-wrapper').html('<div class="fb-like" ' +
             'data-href="https://www.facebook.com/pages/GSgeodet/472002702911359" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"' +
             ' data-width="' + container_width_new + '" ></div>');
             FB.XFBML.parse();
         }
    });
</script>
 