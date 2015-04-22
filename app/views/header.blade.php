<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
		</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="css/bootstrap-glyphicons.css" >

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <link rel="stylesheet" href='http//:fonts.googleaois.com/css?famoly=Oswall | Open+Sans'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script> 
    <![endif]-->


	</head>
	<body>
		<nav class="navbar navbar-default "role="navigation">
          <div class="container">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Taggel navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand">Freelance</a>
                </div>
              <div class="collapse navbar-collapse " id="navbar-collapse">
              <ul class="nav navbar-nav">

              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>BUYY</b> <strong class="caret"></strong> </a>
              
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Post Job</a>
                </li>
                  <li class="divider"></li>
                <li>
                  <a href="#">Browse Hourlies</a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="#">Find Freelancers</a>
                </li>
                  <li class="divider"></li>
                   <li>
                  <a href="#">Find Freelancers</a>
                </li>
                
              </ul><!-- end dropdown-menu -->
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>SELL</b> <strong class="caret"></strong> </a>
              
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Post Hourlie</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#">Browse Jobs</a>
                </li>

                <li class="divider"></li>
                <li>
                  <a href="#">Promote Yourself</a>
                </li>
              </ul><!-- end dropdown-menu -->

                      </ul>

                <ul class="nav navbar-nav">
                    <li ><div class="about-me"><a href="#"><h5><b>Post Job</b></h5></a></div></li>
                   
                </ul>

                        <!-- sociel media-->
                <ul class="nav navbar-nav">
                    <li class="facebook"><a href="#"><span class="glyphicon glyphicon-envelope"></span></i></a></li>
                    <li class="facebook1"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="facebook2"><a href="#"><i class="fa fa-facebook"></i></a></li>
                </ul>
               

                <ul class="nav navbar-nav ">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>    {{   Auth::user()-> username}} <strong class="caret"></strong> </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#"><span class="glyphicon glyphicon-wrench"></span>Settings</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-refresh"></span>update profile</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-briefcase"></span>Billing</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-off"></span>Sign out</a>
            </li>
          </ul>
                </li>
                </ul><!--end nav pull-right-->

                </div>
          </div><!--end container-->
        </nav><!--end nav-->
       






         <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>