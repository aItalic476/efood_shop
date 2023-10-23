<footer class="footer">
      <div class="container">
        <div class="footer__inner">
          <aside class="footer__logo">
            Efood
          </aside>
          <aside class="footer__copy">
            &copy;<date id="date"></date> 
            All Rights Reserved 
          </aside>
        </div>
      </div>
    </footer>

    <!--<script type="text/javascript" src=<?php echo get_template_directory_uri()."/js/app.js"?>></script>-->
    <script>
      
      document.addEventListener("DOMContentLoaded",function(){
          let splide= document.querySelector('.splide');
          if(splide){
    new Splide( '.splide' , {
        type   : 'loop',
        perPage: 4,
        perMove: 1,
        gap: '5vh',
        padding: '8vh',
        width: '100%',
        breakpoints:{
            950:{
                padding:'0',
                perPage: 3
            },
            640:{
                perPage: 2
            },
            510:{
                gap:'1vh'
            },
            320:{
               perPage:1
            }
    
        }
      } ).mount()

    }
      })
    </script>

    <?php wp_footer();?>
</body>
</html>