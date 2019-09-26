<?php


    include("config/connect.php");
    include("config/session.php");


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        
        <!-- Title -->
        <title>Alpha-School | Post Share</title>
        
         <?php include "includes/headerlink.php"; ?>
   
        
    </head>
    <body>
       <?php include "includes/header.php"; ?>
      
            <?php include "includes/navbar.php"; ?>

            
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="col s12 m12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Status</span><br>
                                <div class="row">
                                    <form class="col s12" role="form" method="post" action="blog-post-process.php">
                                         <?php
                                           
                                                $select_post = "select * from usertable where email='$email'";

                                                $run_post = mysqli_query($con,$select_post );
                                                //use for catch data from database
                                                while($row = mysqli_fetch_array($run_post)){
                                                    $name = $row['optionuser'];
                                                    
                                            ?>
                                    
                                                                           
                                         <div class="row">
                                            <div class="input-field col s12">
                                                <input name="optionuser" value="<?php echo $name; ?>" id="disabled" type="text" class="validate">
                                                     <?php } ?>
                                                <label for="disabled">User Category</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="title" placeholder="Post Title" id="first_name" type="text" class="validate">
                                                <label for="first_name">Post Title</label>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="contain" id="textarea1" class="materialize-textarea" length="1000"></textarea>
                                                <label for="textarea1">Write Contain</label>
                                            </div>
                                        </div>
                                        <button name="submit" class="waves-effect waves-light btn indigo m-b-xs">Post</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </main>
           
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
         <?php include "includes/footerlink.php"; ?>
        
    </body>

</html>