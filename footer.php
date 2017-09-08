      <h3>PARTIE DE ANAS MERCI</h3>
      <script type="text/javascript">

        $('#header input').click(function(){
          window.scrollTo(0, 500);
        });


        $(".viewChild").hide();
        $(".colorBack").mouseover(function(){
          $(this).find(".viewChild").show();
        })

        $(".colorBack").mouseout(function(){
          $(this).find(".viewChild").hide();
        })
      </script>


      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>

      <!-- jQuery library -->
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

      <!-- Tether -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

      <!-- Bootstrap 4 Alpha JS -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>

      <!-- Initialize Bootstrap functionality -->
      <script>
      // Initialize tooltip component
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
      // Initialize popover component
      $(function () {
        $('[data-toggle="popover"]').popover()
      })
      </script>

    </body>
</html>
