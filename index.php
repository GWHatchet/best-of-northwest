<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title></title>
      <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="css/font-awesome.css" rel="stylesheet" media="screen">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/superslides.css" rel="stylesheet" media="screen">
      <link href="css/style.css" rel="stylesheet" media="screen">
      <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,400italic' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <section id="main-wrapp">
         <div id="intro">
            <ul class="slides-container">
               <li>
                  <img style="-webkit-filter: grayscale; -webkit-filter: brightness(40%);" src="images/landing.jpg" alt="">
                  <div class="caption-wrap">
                     <div class="slide-caption">
                        <h6>The GW Hatchet Presents</h6>
                        <h1>Best of Northwest</h1>
                        <p>
                           <a href="#home" class="btn btn-lg btn-border-white">Explore</a>
                        </p>
                     </div>
                  </div>
               </li>
            </ul>
            <nav class="slides-navigation">
               <a href="index.html#" class="next">
               <i class="fa fa-angle-right"></i>
               </a>
               <a href="index.html#" class="prev">
               <i class="fa fa-angle-left"></i>
               </a>
            </nav>
         </div>
         <div class="sticky-wrap">
            <div id="nav">
               <div class="navbar navbar-default">
                  <div class="container">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="intro">
                        <img style="display:none;" src="images/thumbnail.png" alt=""></a>

                     </div>
                     <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav" id="top-nav">
                           <li class="active">
                              <a href="index.html#intro">Home</a>
                           </li>
                           <li>
                              <a href="index.html#goingout">Going Out</a>
                           </li>
                           <li>
                              <a href="index.html#campuslife">Campus Life</a>
                           </li>
                           <li>
                              <a href="index.html#food">Food</a>
                           </li>                           
                           <li>
                              <a href="index.html#activities">Activities</a>
                           </li>                      
                        </ul>
                        <a href="http://www.gwhatchet.com" class="btn btn-border navbar-btn pull-right external hidden-xs">The GW Hatchet</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section id="home" class="service space">
            <div class="container">
               <div class="row animate fadeInUp animated">
                  <div class="col-md-9 text-left">
                     <h1 class="big-intro">The GW Hatchet presents Best of Northwest
                        <b>
                        </b>
                     </h1>
                     <p class="intro">How do you measure what’s best in Northwest D.C.? You never can, really. But we just want to start the debate, using the nominations from hundreds of Hatchet readers, and some selections from editors. The entire city has rich culture and cool places, but we narrowed it to our home quadrant to keep options under control. Here are our picks for what makes this part of the city great. </p>
                  </div>
               </div>
            </div>
         </section>
<?php foreach($categories as $category): ?>
         <section id="<?php echo $category['name']; ?>" class="p-bmt-0" style="padding-top:80px;">
            <div class="container">
               <div class="row animate fadeInUp animated">
                  <div class="col-sm-6">
                  <h1 class="heading" style="font-family: 'lovelo';"><?php echo $category['title']; ?></h1>
                  <p><?php echo $category['desc']; ?></p>
                  </div>
<?php $i = 0; ?>
<?php foreach($category['awards'] as $item): ?>                           
                  <div class="col-sm-3" style="height:250px; overflow:hidden; margin-top:10px;">
                  <a href="view.php?id=<?php echo base64_encode($item['id']); ?>">
                  <img height="250" style="overflow:hidden; -webkit-filter: grayscale; -webkit-filter: brightness(40%);" src="img/<?php echo $item['pic']; ?>">
                  <h1 style="position:absolute; top:50px; left:30px; color:#fff; font-family: 'lovelo';"><?php echo $item['name']; ?></h1>
                  </a>
                  </div>
<?php endforeach; ?>                  
               </div>               
            </div>
         </section>
<?php endforeach; ?>
      </section>
      <script src="js/jquery.js"></script>
      <script src="js/jquery.isotope.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.scrollTo.js"></script>
      <script src="js/jquery.nav.js"></script>
      <script src="js/jquery.superslides.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/tweetie.js"></script>
      <script src="js/pace.min.js"></script>
      <script src="js/featherlight.js"></script>
      <script src="js/jquery.nicescroll.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
<!--- Built for GW Hatchet based on NORA by Pamu Kovic --->
</html>