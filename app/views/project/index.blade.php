

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="css/bootstrap-glyphicons.css" >

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!--<link rel="stylesheet" href='http//:fonts.googleaois.com/css?famoly=Oswall | Open+Sans'>

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
                @if(Auth::check() && Auth::user()->isAdmin())
  <a href="{{URL()}}/newcategory" class="btn btn-default" data-toggle="modal" data-target="#group_form">cagjhy!</a>
@endif
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
                  <a href="{{URL()}}/freelance-jobs">Browse Jobs</a>
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
              <a href="{{URL()}}/logout"><span class="glyphicon glyphicon-off"></span>{{Lang::get('main.logout')}}</a>
             
            </li>
          </ul>
                </li>
                </ul><!--end nav pull-right-->

                </div>
          </div><!--end container-->
        </nav><!--end nav-->
       






         <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

@yield('main')



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

        <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
    <link rel="stylesheet" href="css/bootstrap-glyphicons.css" >

    <link rel="stylesheet" type="text/css" href="navbar.css">
    <!-- Custom Fonts -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   
       

        <div class="container">
             <div class="row">
             <!--left-->
                 <div class="col-md-3" id="leftCol">
                 <div class="form-searsh">
                    <form class="navbar-form navbar-right" role="search">
                       <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                       </div>
                      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                  </div> 
                     <h5>CATEGORIES</h5>
                     <hr>
                              
                    <h5 class="title">All Categoroy</h5> 
                     <ul>   @foreach($category as $category)
                     <b><li><a href="{{ URL::route('freelance_job', $category->id) }}">{{ $category->cat_name }}</a></li></b>
                     <br>
                  
                           @endforeach
                    </ul>
                   

                 </div><!--/left-->
                 
                     
           

                <div class="col-md-9" id="rightcol">@foreach($project as $project)
                    <section>  
                     <div class="row">

                    
                       <div class="col-md-9 col-md-push-3" class="col-3">
                        <a href="#"  class="send-proposable"><h5><b>contact</b></h5></a>
                      
                        <a href=""><h3>{{ $project->title }}</h3></a>
                        <br>
                      <br>
                        <br>
                        <p><b><i>porbosenle:</i></b> 12     <b><i>monotant:</i></b> 95$  </p>
                        </div>
                        <div class="col-md-3 col-md-pull-9" id="col-9">
                        <img  src="img/writing.jpg" class="img-rounded" width="100" height="80">
                    
                      </div> 
                        </div><hr> 
                   </section>@endforeach
               
                 @pagination(3)
                     <center><div class="pagination">
                     <ul class="pagination">
                         <li><a href="#">&laquo; </a></li>
                         <li class="active"><a href="#">1</a></li>
                         <li><a href="#">2</a></li>
                         <li><a href="#">3</a></li>
                         <li><a href="#">4</a></li>
                         <li><a href="#">5</a></li>
                         <li><a href="#">&raquo; </a></li>
                      </ul>
                    </div> </center>
          </div>       
         </div><!--row-->
      </div>


 <div id="footer">
    <div class="footer-text">
        <ul class="nav navbar-nav navbar-right" id="icon-ftg">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="facebook1"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="facebook2"><a href="#"><i class="fa fa-google"></i></a></li>
        </ul>
    <ul>
        <b><li><a href="">Home</a></li></b>
        <b><li><a href="">Home</a></li></b>
        <b><li><a href="">Home</a></li></b>
        <b><li><a href="">Home</a></li></b>
        <b><li><a href="">Home</a></li></b>
        <b><li><a href="">Home</a></li></b>
    </ul>
   
</div>
  </body>
</html>