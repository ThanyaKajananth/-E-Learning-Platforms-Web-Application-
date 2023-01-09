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
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map</a></li>
                        <li><a href="#"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us</a></li>
                        <li class="nav-header">About US</li>
                        <li><a href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission</a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision</a></li>
                        <li  class="active"><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History</a></li>

                    </ul>
                </div>

            </div>

            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>BCAS History</strong>
                </div>


                
                <div class="hero-unit-2">
                    
                    <p align="justify">
                        BCAS was founded in 1999 with the mission of providing basic computer education and knowledge of English to equip school leavers (O/A levels) with the skills they need to succeed in the modern job market. The primary goal of BCAS back then was to help find immediate employment for disparate students in the private and government sectors, as well as in the Middle-East as computer operators. Thus, was born BCAS' flagship course of study, the "Access Programme," which incorporates IT and English to prepare post-AL students who are not able to gain admission to state universities. In the past 2 years, approximately 10,000 students have used BCAS to gain admission to various types of higher education institutions in the UK, including universities. The Institute was the first in Sri Lanka to obtain a franchise to prepare students for the European Computer Driving Licence (ECDL). The course was later renamed the International Computer Driving Licence (ICDL).
                    </p>
                </div>
                


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>







</body>
</html>


