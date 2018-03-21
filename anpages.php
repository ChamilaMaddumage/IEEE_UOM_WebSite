<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>ANNOUNCEMENTS</title>
	<meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    
</head>
<body>
<!--Start Header-->
    <div>
    <?php include("includes/announcements/anheader.php");    ?> 
    </div>
<!--End Header-->
	
	<!--start wrapper-->
	<section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>ANNOUNCEMENTS</h2>
                        </div>
                      <!--  <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a>/</li>
                                <li>Blog</li>
                            </ul>
                        </nav>  -->
                        
                        
                    </div>
                </div>
            </div>
        </section>
		<section class="content blog">
			<div class="container">
				<div class="row">

                    
                    
                    
                    
            					





<div class="col-sm-8 col-md-8 col-lg-8"> 
    
    
    <?php
include("includes/announcements/connect.php");

if(isset($_GET['id'])){
    $page_id=$_GET['id'];
    $select_query="select * from posts where post_id='$page_id'";

$run_query=mysql_query($select_query);

  while($row=mysql_fetch_array($run_query)){
  
      $post_id=$row['post_id'];
      $post_title=$row['post_title'];
      $post_date=$row['post_date'];
      $post_content=$row['post_discription'];
      $post_image=$row['post_image'];
      $post_month=$row['post_month'];
      $post_day=$row['post_day'];
  
  
  
  



?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
						<div class="blog_large">
							<article class="post">
								<figure class="post_img">
									<a href="#">
										<img src="images/<?php echo"$post_image"; ?>" alt="blog post">
									</a>
								</figure>
								<div class="post_date">
									<span class="day">28</span>
									<span class="month">Nov</span>
								</div>
								<div class="post_content">
									<div class="post_meta">
										<h2>
											<a href="anpages.php?id=<?php echo $post_id ?>"><?php echo"$post_title";   ?></a>
										</h2>
										
									</div>
									<p><?php   echo"$post_content"; ?></p>
                                    
									
								</div>
							</article>

							
							
							
							
						</div>
						<?php }       } ?>
						
					</div>  

			
                    
                    
                    
                    
                    
                    
                    
                    
    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div>
    <?php  include("includes/announcements/ansidebar.php"); ?>
    </div>               
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
				</div><!--/.row-->
			</div> <!--/.container-->
		</section>
	</section>
	<!--end wrapper-->
	
	<!--start footer-->
    
    
    
    
    
    <div>
    <?php  include("includes/announcements/anfooter.php"); ?>
    </div>
    
    
    

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>

    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
</body>
</html>
