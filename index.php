<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elite Academy conference 2014 -- Home</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <!-- Header Tag Code -->
<script data-cfasync='false' type='text/javascript'>/*<![CDATA[*/(function (a, c, s, u){'Insticator'in a || (a.Insticator={ad:{loadAd: function (b){Insticator.ad.q.push(b)}, q: []}, helper:{}, embed:{}, version: "2.0", q: [], load: function (t, o){Insticator.q.push({t: t, o: o})}}); var b=c.createElement(s); b.src=u + new Date(Math.floor(new Date().getTime() / 6e5) * 6e5).getTime(); b.async=!0; var d=c.getElementsByTagName(s)[0]; d.parentNode.insertBefore(b, d)})(window, document, 'script', '//embed.insticator.com/embeds/script?sid=4e216c05-a296-4fa8-9878-e1f38ad716fe&cbt=');/*]]>*/</script>
<!-- End Header Tag Code -->
  </head>
  <body id="home">
    <section class="container"> 
        <div class"row">
            <?php include "_/components/php/header.php"; ?>
            <?php include "_/components/php/snippet-carousel.php"; ?>
          <section class="main col-md-8 col-xs-12">
              <?php include "_/components/php/article-intro.php"; ?>
              <!-- Insticator API Embed Code -->
<div id="insticator-container"><div id="div-insticator-ad-1"></div><div id="insticator-embed"></div><div id="div-insticator-ad-2"></div><script data-cfasync='false' type="text/javascript">/*<![CDATA[*/Insticator.ad.loadAd("div-insticator-ad-1");Insticator.ad.loadAd("div-insticator-ad-2");Insticator.load("em",{id : "28966aca-2cf8-44f7-87c2-343b479d0945"})/*]]>*/</script></div>
<!-- End Insticator API Embed Code -->
              <?php include "_/components/php/article-abouttheartists.php"; ?>
              <?php include "_/components/php/article-aboutthevenue.php"; ?>
          </section><!--main -->
          <section class="sidebar col-md-4 col-xs-6">
            <?php include "_/components/php/aside-register.php"; ?>
             <?php include "_/components/php/aside-lastyear.php"; ?>
             <?php include "_/components/php/aside-accordion.php"; ?>
          </section><!-- sidebar -->
        </div> <!-- content-->
       
    </section>    <!-- container -->
     <?php include "_/components/php/footer.php"; ?>
    <script src="_/js/bootstrap.js"></script>
     <script src="_/js/myscript.js"></script>
  </body>
</html>
