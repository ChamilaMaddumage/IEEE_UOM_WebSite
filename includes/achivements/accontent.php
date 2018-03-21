					





<div class="col-sm-8 col-md-8 col-lg-8"> 
    
    
    <?php
include("includes/achivements/connect.php");
$select_posts="select * from posts where post_type='achivements' order by rand() LIMIT 0,4";
$run_posts=mysql_query($select_posts);

  while($row=mysql_fetch_array($run_posts)){
  
      $post_id=$row['post_id'];
      $post_title=$row['post_title'];
      $post_date=$row['post_date'];
      $post_content=substr($row['post_discription'],0,200);
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
											<a href="acpages.php?id=<?php echo $post_id ?>"><?php echo"$post_title";   ?></a>
										</h2>
										
									</div>
									<p><?php   echo"$post_content"; ?></p>
                                    <a class="btn btn-small btn-default" href="acpages.php?id=<?php echo $post_id;  ?>">Read More</a>
									
								</div>
							</article>

							
							
							
							
						</div>
						<?php } ?>
						
					</div>