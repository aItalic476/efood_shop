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

    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded",function(){
        let postText = document.querySelector('.post__single__text'),
            postPrice = postText.nextElementSibling
            console.log(postPrice)
    
    })

    </script>

<?php wp_footer()?>
</body>
</html>