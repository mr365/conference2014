<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elite Academy conference 2014 -- Artists</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
  <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="artists" data-spy="scroll" data-target=".scrollspy">
    <section class="container"> 
        <div class"row">
            <?php include "_/components/php/header.php"; ?>
            
          <section class="main col-md-8 col-xs-12">
              <?php include "_/components/php/article-artistlist.php"; ?>
             
          </section><!--main -->
          <section class="sidebar col-md-4 col-xs-6">
            <?php include "_/components/php/aside-register.php"; ?>
             <?php include "_/components/php/aside-lastyear.php"; ?>
             <?php include "_/components/php/aside-accordion.php"; ?>
             
          </section><!-- sidebar -->

        </div> <!-- content-->

    </section><!--container-->

    
    <script src="_/js/bootstrap.js"></script>
     <script src="_/js/myscript.js"></script>
  </body>
</html>