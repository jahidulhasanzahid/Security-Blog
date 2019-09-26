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
    <body class="signup-page">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container ">
                <div class="valign">
                      <div class="row">
                        <!--<div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                    <a href="Admin-index.html">Home</a>
                                  </div>
                              </div>
                          </div>-->
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Create Account</span>
                                       <div class="row">
                                           <form class="col s12" role="form" method="post" action="user-sigup-process.php">
                                               <div class="input-field col s12">
                                                   <input id="name" name="name" type="text" class="validate">
                                                   <label for="name">Name</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="email" name="email" type="email" class="validate">
                                                   <label for="email">Email</label>
                                               </div>
                                                <div class="input-field col s12">
                                                  <select name="optionuser">
                                                      <option value="Student">Student</option>
                                                      <option value="Teacher">Teacher</option>
                                                      <option value="Guardian">Guardian</option>
                                                  </select>
                                                 
                                              </div>
                                                    <!--<div class="file-field input-field col s12">
                                                        <div class="btn teal lighten-1">
                                                            <span>Photo</span>
                                                            <input type="file" name="photo">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" name="photo" type="file">
                                                        </div>
                                                    </div>-->
                                               <div class="input-field col s12">
                                                   <input id="password" name="password" type="password" class="validate">
                                                   <label for="password">Password</label>
                                               </div>
                                      
                                               <div class="col s12 right-align m-t-sm">
                                                    <a href="Admin-index.php" class="waves-effect waves-grey btn white">Home</a>
                                                   <button class="waves-effect waves-light btn teal" type="submit" name="submit">Sign Up</button>
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
        
        <!-- Javascripts -->
        <?php include "includes/footerlink.php"; ?>
        
    </body>

</html>