<?php include 'connection.php'; ?>
<?php
$id = base64_decode($_GET['id']);
$query = mysql_query("SELECT * FROM bonw_winners where id = $id", $con);
while($row = mysql_fetch_assoc($query)){
     $winner[] = $row;
}
?>
<?php foreach($winner as $item): ?>                           
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="creative agency,personal portfolio" name="description">
    <meta content="Pamukovich" name="author">
    <!--[if lt IE 9]>
        	<script type="text/javascript" src="http://pamukovic.com/demo/nora/assets/plugins/lt-ie9/html5.js"></script>
			<script type="text/javascript" src="http://pamukovic.com/demo/nora/assets/plugins/lt-ie9/respond.min.js"></script>
			<script type="text/javascript" src="http://pamukovic.com/demo/nora/assets/plugins/lt-ie9/excanvas.compiled.js"></script>
		<![endif]--> 
        
    <!-- CORE CSS FRAMEWORK -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet">
    
    <!-- PLUGINS -->
    <link href="css/superslides.css" rel="stylesheet" media="screen">
    <link href="css/featherlight.css" rel="stylesheet" media="screen">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    
    <!-- TEMPLATE STYLE -->
    <link href="css/style.css" rel="stylesheet" media="screen">
    
     <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
   <title><?php echo $item['name']; ?> | Best of Northwest | The GW Hatchet</title>
</head>

<body>
 <section class="bg-grey">
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
                     </div>
                     <div class="collapse navbar-collapse">
                        <a href="index.php" class="btn btn-border navbar-btn pull-left external hidden-xs">Back</a>
                     </div>
                     <!--/.nav-collapse -->
                  </div>
               </div>
            </div>
            <!-- .nav-wrapper -->
         </div>
      </section>
      <!--Project Details-->
      <section id="project-content" class="space">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <?php if($item['editorspick']): ?><h2 class="btn btn-border navbar-btn pull-left">Editor's Pick</h2><br /><br /><?php endif; ?>
                  <h2><?php echo $item['name']; ?>: <?php echo $item['winner']; ?></h2>
                  <?php if($item['video']): ?>
                      <iframe width="560" style="margin-left:auto; margin-right:auto;" height="315" src="//www.youtube.com/embed/<?php echo $item['video']; ?>" frameborder="0" allowfullscreen></iframe>
                  <?php endif; ?>                  
                  <p><?php echo preg_replace('/[^(\x20-\x7F)]*/','', $item['blurb']); ?></p>
                  <br />
               </div>
               <div class="col-md-4 description">
                  <?php if($item['location']): ?>
                  <p>
                     <strong>Location:</strong>
                     <?php echo $item['location']; ?>
                  </p>
                <?php endif; ?>
                  <p>
                     <strong>Name:</strong>
                     <?php if($item['name']) echo $item['name']; ?>
                  </p>
                  <p>
                     <strong>Category:</strong>
                     <?php if($item['category']) echo $item['category']; ?>
                  </p>               
                  <p>
                     <strong>Runner up:</strong>
                     <?php if($item['runnerup']) echo $item['runnerup']; ?>
                  </p>               
                  <img src="img\<?php echo $item['pic']; ?>" width="400px;" />
                  <?php if($item['mediacredits']): ?>
                  <p>Media Credits: <?php echo $item['mediacredits']; ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </section>
      <span class="featherlight-close">X</span>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1726704-1");
pageTracker._setDomainName(".gwhatchet.com");
pageTracker._trackPageview();
} catch(e) {}
try {
var pageTracker = _gat._getTracker("UA-18994242-2");
pageTracker._setCustomVar(1, "pu", 'gwhatchet.com', 3);
pageTracker._setCustomVar(2, "pi", '332', 3);
pageTracker._setCustomVar(3, "pn", 'GW Hatchet', 3);
pageTracker._setCustomVar(4, "ppp", '3', 3);
pageTracker._setCustomVar(5, "pcp", 'WP', 3);
pageTracker._trackPageview();
} catch(e) {}
</script>
</body>
</html>
<?php endforeach; ?>