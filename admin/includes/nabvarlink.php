<aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <?php
                                $con = mysqli_connect("localhost","root","","gtsblog") or die("Couldn't Connect SQL Server");

                                    $select_post = "select * from adminlogin where username='$user_name'";

                                    $run_post = mysqli_query($con,$select_post );
                                    //use for catch data from database
                                    while($row = mysqli_fetch_array($run_post)){
                                        $user_name = $row['username'];
                                ?>
                                <p> <?php echo $user_name; ?> </p>
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            <!--<li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Inbox</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred<span class="new badge">18</span></a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a>
                            </li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">history</i>History<span class="new grey lighten-1 badge">3 new</span></a>
                            </li>-->
                            <li class="divider"></li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey" href="logout.php" name="logout"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding"><a class="waves-effect waves-grey" href="Admin-index.php"><i class="material-icons">settings_input_svideo</i>Dashboard</a>
                    </li>
                     <li class="no-padding"><a class="waves-effect waves-grey" href="sign-up.php"><i class="material-icons">supervisor_account</i>Create Account</a>
                      
                    </li>
                    <!--<li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Apps<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li><a href="search.html">Search</a></li>
                                <li><a href="todo.html">Todo</a></li>
                            </ul>
                        </div>
                    </li>-->
    
                </ul>
                <div class="footer">

                    <p class="copyright">BITZ with <span style="color: red;">❤</span></p>
                    <a href="#!">Facebook</a>
                </div>
                </div>
            </aside>