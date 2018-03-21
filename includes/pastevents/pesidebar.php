		<!--Sidebar Widget-->
					<div class="col-sm-4 col-md-4 col-lg-4">
                        
                        
						<div class="sidebar">
                            <div class="widget widget_tab">
                                <div class="velocity-tab sidebar-tab">
                                    <ul  class="nav nav-tabs">
                                        <li ><a href="#" >RECENT POSTS</a></li>
                                        
                                        
                                    </ul>

                                    
                                </div>
                            </div>
							
							
							
							
						</div>
					</div>
















    

    
    
<div class="col-sm-4 col-md-4 col-lg-4">
                          
    
    
                        
						<div class="sidebar">
                            <div class="widget widget_tab">
                                <div class="velocity-tab sidebar-tab">
                                   <div  class="tab-content clearfix"> 
                                    <div>
                                    <?php
include("includes/pastevents/connect.php");

$query="select * from posts where post_type='pastevents' order by 1 DESC LIMIT 0,5";
$run=mysql_query($query);
while($row=mysql_fetch_array($run)){
    
$id=$row['post_id'];
$title=$row['post_title'];
$image=$row['post_image'];
    

    


?>

                                    
                                        <div class="tab-pane fade active in">
                                            <ul class="recent_tab_list">
                                                <li>
                                                    <span><a href="#"><img src="images/<?php echo $image ?>" alt="" width="50" height="50" /></a></span>
                                                    <a href="pepages.php?id=<?php echo $id;  ?>"><?php echo $title ?></a>
                                                    
                                                </li>
                                                
                                            </ul>
                                        
                                        
                                        
                                        </div>
                                        
                                        <?php } ?>
                                        
                                        
                                        
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
							
							
							
							
						</div>
					</div>
    
    
