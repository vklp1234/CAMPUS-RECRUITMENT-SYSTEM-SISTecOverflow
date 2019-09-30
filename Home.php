<?php
session_start();
if (isset($_SESSION['EmailID']) && isset($_SESSION['role']) ) {
    $role = $_SESSION['role'];
    if (strtoupper($role)=='TNPHEAD' or strtoupper($role)=='TNPCOORDINATOR') {
        header("Location: admin/Dashboard.php?profile=$role");
    }else if (strtoupper($role)=='STUDENT') {
        header("Location: admin/Student_information.php?profile=$role");
    }
    
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>CRS | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Header-Nightsky.css">
   
     <link rel="shortcut icon" href="assets/img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Turret+Road&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header-nightsky">
        <nav class="navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="assets/img/finallogo.png" class="img-responsive logo-campus"></a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php"><span class="bordercampus">HOME</span></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="bordercampus">Blogs</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Query</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="bordercampus">SISTec</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"></a></li>
                                <li><a href="#">Galary</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="login_register.php"   class="btn btn-primary dropdown-toggle">Login/Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <h1 class="title-campus">Campus Recruitment System</h1>
            <p class="para-campus">This System Help You To Maintain Your Previous Or Upcoming Campus Recruitment Drive's Student's Records.</p>
            <div class="btn btn-primary">Learn more about us</div>
            <div class="btn btn-primary">Contact us</div>
        </div>
    </div>
    <!-- footer section start -->
    <footer>
        <div class="row footer-campus">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fta">
                    <img src="assets/img/footer1.png" class="img-campus">
                    <ul class="fta-list">
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span>SISTec in Media</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span>ERP Login</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span>SISTec Blog</a></li>
                </ul>
                
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-fta">
                   <h3 class="fta-title-campus1 text-campus"> <i class="fa fa-link" style="color: #fff;"></i> Social Links</h3>
                    <ul class="inlie-campus">
                        <li  ><a  href="https://www.facebook.com/sagargroupofinstitutionssistec/" ><i class="fa fa-facebook-square" style="font-size:19px; color: #286090;"></i> <span style="color: #e5e5e5;"> Facebook</span></a></li>
                        <li><a  href="https://www.instagram.com/sagarcollegebhopal/" ><i class="fa fa-instagram"  style="font-size:19px; color: #d10088;"></i><span style="color: #e5e5e5;"> Instagram</span></a></li>
                        <li><a  href="https://twitter.com/SagarCollege" ><i class="fa fa-twitter"  style="font-size:19px; color: #55acee;"></i> <span style="color: #e5e5e5;"> Twitter</span></a></li>
                        <li><a  href="https://www.linkedin.com/in/sistec-sagar-group-of-institutions-77653a7b/" ><i class="fa fa-linkedin"  style="font-size:19px; color: #0077b5;"></i>  <span style="color: #e5e5e5;"> LinkedIn</span> </a></li>
                        <li><a href="https://www.youtube.com/channel/UCytOCmxQb7IFU2BVFdI7T7w" ><i class="fa fa-youtube"  style="font-size:19px; color: #cd201f;"></i>  <span style="color: #e5e5e5;"> YouTube</span></a></li>

                    </ul>
                
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fta">
                   <h3 class="fta-title-campus"> Contact Us</h3>
                    <ul class="fta-list">
                    <li><a href="#"><span class="glyphicon  glyphicon-home"></span> Address : Opposite International Airport, SISTec</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-phone"></span> Phone(+91) 831987096</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Email: info@sistec.ac.in</a></li>
                </ul>
                
                </div>
            </div>
        </div>

    </footer>
   
    <div class="row copy-campus">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="text-center">
                <p class="copyright-campus">Copyright © 2019. All Right Reseved . Powered By SISTec . Design By Vishwas Lodhi.</p>
                
            </div>
        </div>
        
    </div>
    <!-- ends here footer -->
 

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
