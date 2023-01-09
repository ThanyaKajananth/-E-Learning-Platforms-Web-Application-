<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>

                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li class="active"><a href="#"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
                        <li class="nav-header">About US</li>
                        <li><a  href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>
                <br>


            </div>
            <div class="span9">
                <section class="main">
                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header clearfix">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>
                </section>


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Head Up!</strong>&nbsp;Welcome to BCAS E-Learning Site.
                </div>
                <div class="slider-wrapper theme-default">
                <?php include('slider.php'); ?>
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->
    <div class="container">

        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                    <div class="span9">
                        <div class="alert alert-success"><i class="icon-file icon-large"></i>&nbsp;<strong>About Us</strong></div>
                        <div class="hero-unit-2"><p align="justify">
                             BCAS remains committed to providing the best skills to the industry via education. This commitment ensures that students are well-prepared to enter the workforce making a positive impact in their chosen field.

                            Besides several awards from the Pearson UK, BCAS has won Sri Lanka’s Most Successful Employer Award, Outstanding Contribution to the Cause of Education Award, and Asia’s Best Employer Brand Awards from several reputed International Awarding Bodies.</p>

                            <p align="justify">The student population of around 3500+ are distributed among the five campuses of BCAS Campus, with Colombo being the main campus and Kandy, Jaffna, Galle, and Kalmunai as the satellite campuses.

                            BCAS is a successful pioneer in preparing for the middle-eastern employment market. There are more than 10,000 BCAS alumni employed in West Asia. Additionally, there are also a great number of alumni in countries like Great Britain, Canada, Australia and the United States of America.
                            </p> </div>

                    </div>
                    <div class="span3">
                        <div class="alert alert-info">
                            <i class="icon-building icon-large"></i>&nbsp;Campuses

                        </div>
                           <div class="hero-unit-3">
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;City Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Kandy Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Jaffna Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Kalunai Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Galle Campus</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <br>
        <div class="alert alert-success"><i class="icon-file icon-large"></i>&nbsp;<strong>Objectives</strong></div>
        <div class="hero-unit-2"><p align="justify">
                At BCAS, we offer courses at four different levels: Degree Foundation, BTEC HNDs, Top Up Degrees, and Masters. As an ISO 9001; 2008 certified institution, we are committed to providing the highest level of quality education including practical skills as well as industry insights needed for students to enter their profession.
            </p> </div>

        <?php include('footer.php'); ?>
    </div>


</div>
</div>






</body>
</html>


