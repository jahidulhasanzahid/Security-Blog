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

                                    $select_post = "select * from usertable where email='$email'";

                                    $run_post = mysqli_query($con,$select_post );
                                    //use for catch data from database
                                    while($row = mysqli_fetch_array($run_post)){
                                        $name = $row['name'];
                                        $email = $row['email'];
                                ?>
                                <p> <?php echo $name; ?> </p>
                                <p> <?php echo $email; ?> </p>
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
                    <li class="no-padding"><a class="waves-effect waves-grey" href="home.php"><i class="material-icons">settings_input_svideo</i>Dashboard</a>
                    </li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="post-share.php"><i class="material-icons">import_contacts</i>Post Status</a>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>List<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="studentlist.php">Student</a></li>
                                <li><a href="G.php">Guardian</a></li>
                                <li><a href="T.php">Teacher</a></li>
                            </ul>
                        </div>
                    </li>
    
                </ul>
                <div class="footer">

                    <p class="copyright">BITZ with <span style="color: red;">❤</span></p>
                    <a href="#!">Facebook</a>
                    <a href="count.php">Total Visitor Count</a>
                </div>
                </div>
            </aside>