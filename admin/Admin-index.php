<?php


    include("config/connect.php");
    include("config/session.php");


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        
        <!-- Title -->
        <title>Alpha-School</title>
        
        <?php include "includes/headerlink.php"; ?>
   
        
    </head>
    <body>
        <?php include "includes/header.php"; ?>


        <?php include "includes/nabvarlink.php"; ?>
            


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

                                            $query = "select * from usertable order by 1 DESC";

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
            <!--<div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                    <div class="footer-grid-l white">
                        <a class="footer-text" href="ui-waves.html">
                            <i class="material-icons arrow-l">arrow_back</i>
                            <span class="direction">Previous</span>
                            <div>
                                Waves
                            </div>
                        </a>
                    </div>
                    <div class="footer-r white">&nbsp;</div>
                    <div class="footer-grid-r white">
                        <a class="footer-text" href="layout-boxed.html">
                            <i class="material-icons arrow-r">arrow_forward</i>
                            <span class="direction">Next</span>
                            <div>
                                Boxed Layout
                            </div>
                        </a>
                    </div>
                </div>
            </div>-->
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
      <?php include "includes/footerlink.php" ?>
        
    </body>

</html>