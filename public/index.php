<!doctype html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="author" content="War Turtle">
        <title>NIT KKR || HOME</title>
        <!--linking materialize file-->
        <link rel="stylesheet" href="../stylesheet/materialize.min.css">
        <!--linking jquery file-->
        <style>
            nav{
                background-image: url('../images/6.png');
                background-repeat: no-repeat;
                background-size: cover
            }
            .slant{
                position: relative;
                background-image: url('../images/1.jpg');
                background-size: cover;
                width: 100%;
            }
            .slant:before{
                position: absolute;
                width:100%;
                height:100%;
                content: '';
                background-image: url('../images/1.jpg');
                background-size: cover;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                transform-origin: top left;
                z-index: -1;
                transform: skewY(-4deg);
            }
            .slant:after{
                position: absolute;
                width:100%;
                height:105px;
                content: '';
                background-image: url('../images/1.jpg');
                transform-origin: bottom right;
                bottom:0;
                right:0;
                transform: skewY(-4deg);
            }
            .up{
                z-index :2;
            }
            footer{
                background-image: url('../images/1.jpg');
                background-size: cover;
            }
        </style>
    </head>
    <body>

<!--        navigation bar started   -->
        
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><img src="../images/NIT.png" width="65px"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#"><b>Home</b></a></li>
                    <li><a href="#"><b>Institue</b></a></li>
                    <li><a href="#"><b>Acedmics</b></a></li>
                    <li><a href="#"><b>Administration</b></a></li>
                    <li><a href="#"><b>Departments</b></a></li>
                    <li><a href="#"><b>Sections</b></a></li>
                    <li><a href="#"><b>Student Activites</b></a></li>
                    <li><a href="#"><b>Contacts</b></a></li>
                </ul>
                <ul class="side-nav red white-text" id="mobile-demo">
                    <li><a href="#" class="white-text"><b>Home</b></a></li>
                    <li><a href="#" class="white-text"><b>Institue</b></a></li>
                    <li><a href="#" class="white-text"><b>Acedmics</b></a></li>
                    <li><a href="#" class="white-text"><b>Administration</b></a></li>
                    <li><a href="#" class="white-text"><b>Departments</b></a></li>
                    <li><a href="#" class="white-text"><b>Sections</b></a></li>
                    <li><a href="#" class="white-text"><b>Student Activites</b></a></li>
                    <li><a href="#" class="white-text"><b>Contacts</b></a></li>
                </ul>
            </div>
        </nav>

<!--        parallax started      -->
        
<!--        first image of parallax effect     -->
        
        <div class="parallax-container">
            <div class="parallax"><img src="../images/3.jpg"/></div>
        </div>
        
<!--        div container between images started here    -->
        
        <div class="section slant" style="height:900px;">
            <div class="row container white-text">
                <div class="col s12">
                    <h1>NIT Kurukshetra</h1>
                </div>
                <div class="col s12">
                    <h5>INSTITUTE OF NATIONAL IMPORTANCE</h5>
                </div>
            </div>

<!--            chips started here     -->
            
            <div class="chip">
                <img src="../images/tech.jpg" alt="Contact Person">
                <a href="#">Techspardha 2018</a>
            </div>

            <div class="chip">
                <img src="../images/conf.jpg" alt="Contact Person">
                <a href="#">Confluence 2018</a>
            </div>

            <div class="chip">
                <img src="../images/volley.jpeg" alt="Contact Person">
                <a href="#"> Inter NIT volleyball Tournament 2018</a>
            </div>

            <div class="chip">
                <img src="../images/ak.jpeg" alt="Contact Person">
                <a href="#"> Autokriti</a>
            </div>

            <div class="chip">
                <img src="../images/altius1.jpg">
                <a href="#"> Altius </a>
            </div>

<!--            chips ended here but slider of images started here    -->
            
            <div class="slider" >
                <ul class="slides">
                    <li>
                        <img src="../images/ravi.jpg"> 
                        <div class="caption right-align">
                        <h2 class="red-text">
                            Institute of National Importance
                        </h2>
                        </div>
                    </li>
                    <li>
                        <img src="../images/altius.jpg"> 
                        <div class="caption left-align">
                            <h2 class="red-text">Feel The Tech</h2>
                        </div>
                    </li>
                    <li>
                        <img src="../images/v2.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h2 class="red-text">The Colosseum</h2>
                        </div>
                    </li>
                    <li>
                        <img src="../images/nationalinstituteoftechnologykurukshetra.JPG"> 
                        <div class="caption center-align">
                            <h2 class="red-text">Coming Soon...</h2>
                        </div>
                    </li>
                </ul>
            </div>
<!--                 slider ended            -->
        </div>
        
<!--       second image for parallax     -->
        
        <div class="parallax-container">
            <div class="parallax"><img src="../images/2.jpg"></div>
        </div>

<!--   parallax ended but footer started    -->
        
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col s4">
                        <ul>
                            <li><a class="white-text" href="#!">Downloads</a></li>
                            <li><a class="white-text" href="#!">Student Corner</a></li>
                            <li><a class="white-text" href="#!">Important Links</a></li>
                            <li><a class="white-text" href="#!">Forth Coming Event</a></li>
                            <li><a class="white-text" href="#!">Work With Us</a></li>
                            <li><a class="white-text" href="#!">Event Calender</a></li>
                        </ul>
                    </div>
                    <div class="col s4">
                        <ul>
                            <li><a class="white-text" href="#!">Archive</a></li>
                            <li><a class="white-text" href="#!">Resources</a></li>
                            <li><a class="white-text" href="#!">TEQUIP-II</a></li>
                            <li><a class="white-text" href="#!">Archive News</a></li>
                            <li><a class="white-text" href="#!"></a>More@ Nit</li>
                            <li><a class="white-text" href="#!">Councils Of NITs</a></li>
                        </ul>
                    </div>
                    <div class="col s4">
                        <ul>
                            <li><a class="white-text" href="#!">Contact Us</a></li>
                            <li><a class="white-text" href="#!">Alumni Login</a></li>
                            <li><a class="white-text" href="#!">Login</a></li>
                        </ul>
                    </div>

                </div>
            </div>
          <div class="footer-copyright">
            <div class="container white-text">
                Copyright © 2017 All Rights Reserved. NIT Kurukshetra| Designed and developed by warturtle and team.
            </div>
          </div>
        </footer>

        <script src="../javascript/jquery-3.2.1.min.js"></script>
        <script src="../javascript/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.parallax').parallax();
                $(".button-collapse").sideNav();
            });
            $(document).ready(function(){
                $('.slider').slider();
            });
        </script>
    </body>


</html>
