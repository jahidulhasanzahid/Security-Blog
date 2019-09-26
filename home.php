<?php


    include("config/connect.php");
    include("config/session.php");


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        
        <!-- Title -->
        <title>Alpha-School | Dashboard</title>
        
        <?php include "includes/headerlink.php"; ?>
   
        
    </head>
    <body>
         <?php include "includes/header.php"; ?>
      
            <?php include "includes/navbar.php"; ?>


            <main class="mn-inner">
                <div class="row">

                    <?php
                       $select_postone = "select * from usertable where email='$email'";
                         $run_postone = mysqli_query($con,$select_postone );
                                    //use for catch data from database
                                    while($row = mysqli_fetch_array($run_postone)){
                                        $name = $row['name'];
                                        $optionuser = $row['optionuser'];
                                      
                                        
                        ?>
                               
                             


                    <h4 align="center"> <p> <?php echo $optionuser; ?> </p></h4>
                    <?php } ?>
                      <?php
                      
                         $select_post = "select * from blogpost where optionuser='$optionuser' order by 1 DESC";
                         $run_post = mysqli_query($con,$select_post );
                                    //use for catch data from database
                                    while($row = mysqli_fetch_array($run_post)){
                                        $optionuserone = $row['optionuser'];
                                        $title = $row['title'];
                                        $contain = $row['contain'];

                        ?>

                    <div class="col s12">
                       
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-content">

                                <h5><?php echo $title; ?></h5>
                                <p><?php echo $contain; ?></p>
                                <span class="cd-date" style="color: indigo;">Post By : <?php echo $optionuserone; ?></span>

                                <hr/>
                                 <?php } ?>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        
                    </div>
                </div>
            </main>
           
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <?php include "includes/footerlink.php"; ?>
        
    </body>

</html>