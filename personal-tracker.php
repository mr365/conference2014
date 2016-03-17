<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elite Academy conference 2014 -- Personal tracker</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
   <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="tracker">
    <section class="container"> 
        <div class"row">
            <?php include "_/components/php/header.php"; ?>
            
          <section class="main col-md-8 col-xs-12">
             <div
              class="fb-like"
              data-share="true"
              data-width="450"
              data-show-faces="true">
            </div>
             
          </section><!-- sidebar -->

        </div> <!-- content-->

    </section><!--container-->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1585847198372603',
          xfbml      : true,
          version    : 'v2.5'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>