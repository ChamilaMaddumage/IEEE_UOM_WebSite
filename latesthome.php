	
		<section class="content portfolio_single">
            
            
            <div class="container">
            <div class="row super_sub_content">
                <div class="col-md-12">
                    <div class="dividerHeading">
                        <h4><span>latest post</span></h4>
                    </div>
                </div>
                </div>
            </div>
            
            
            
            
            
            
     
			<div class="container">
            <div class="row super_sub_content">
                <div class="col-md-12">
                    <div id="post-slider" class="owl-carousel">
                        
                        
                         
                             
                             
                             
                             
                             
                             
                             
                                    <?php
include("connect.php");

$query="select * from posts  order by 1 DESC LIMIT 0,6";
$run=mysql_query($query);
while($row=mysql_fetch_array($run)){
    
$id=$row['post_id'];
$title=$row['post_title'];
$image=$row['post_image'];
$type=$row['post_type'];  
$content=substr($row['post_discription'],0,60);
    


?>
                        
                        
                        
                        
                        
                        
                        
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="images/<?php echo $image ?>" alt="" width="260" height="260" />
                            </div>
                            <h5 class="post-title"><a href=" <?php 
        
        
        
        if($type=='pastevents'){
        
        echo "pepages.php";
                                
    }elseif($type=='upcommingevents'){
    
        echo "uepages.php";
        
    }elseif($type=='achivements'){
    
        echo "acpages.php";
        
    }elseif($type=='announcements'){
    
        echo "anpages.php";
        
    }
                                
                                
                                
                                
                                
                                ?>?id=<?php echo $id;  ?>"><?php echo $title ?></a></h5>
                            
                            <p><?php echo $content ?> ...</p>
                            <a class="readmore" href=" <?php 
        
        
        
        if($type=='pastevents'){
        
        echo "pepages.php";
                                
    }elseif($type=='upcommingevents'){
    
        echo "uepages.php";
        
    }elseif($type=='achivements'){
    
        echo "acpages.php";
        
    }elseif($type=='announcements'){
    
        echo "anpages.php";
        
    }
                                
                                
                                
                                
                                
                                ?>?id=<?php echo $id;  ?>">Read more</a>
                        </div>
                        
                        
                        
                        <?php } ?>
                                        
                                        
                                        
                                        
                                   
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
            
            
            
            
		</section>