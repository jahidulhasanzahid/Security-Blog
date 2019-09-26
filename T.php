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
                    <div class="col s12">
                        <table class="responsive-table">
                                    <thead>
                                        <tr>
                                            <th data-field="Name">Name</th>
                                            <th data-field="Email">Email</th>
                                            <th data-field="Option">Option</th>
                                        </tr>
                                    </thead>
                                    <?php 

                                            $query = "select * from usertable where optionuser='Teacher' order by 1 DESC";

                                            $run = mysqli_query($con,$query);
                                            while($row=mysqli_fetch_array($run)){

                                                $name = $row['name'];
                                                $email = $row['email'];
                                                $option = $row['optionuser'];

                                            ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $option; ?></td>
                                        </tr>

                                        <?php } ?>

                                    </tbody>
                                </table>
                    </div>
                </div>
            </main>
           
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <?php include "includes/footerlink.php"; ?>
        
    </body>

</html>