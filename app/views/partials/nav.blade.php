<nav class="navbar navbar-default " role="navigation">
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
                          <a href="{{URL()}}/newcategory">new category</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="{{URL()}}/newproject">Find Freelancers</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">Find Freelancers</a>
                      </li>
                  </ul>
                  <!-- end dropdown-menu -->
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
                      </ul>
                      <!-- end dropdown-menu -->
          </ul>
          <ul class="nav navbar-nav">
              <li>
                  <div class="about-me"><a href="#"><h5><b>Post Job</b></h5></a></div>
              </li>
          </ul>
          <!-- sociel media-->
          <ul class="nav navbar-nav">
              <li class="facebook"><a href="#"><span class="glyphicon glyphicon-envelope"></span></i></a></li>
              <li class="facebook1"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="facebook2"><a href="#"><i class="fa fa-facebook"></i></a></li>
          </ul>
          <ul class="nav navbar-nav ">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-user"></span>    
                  {{ Auth::user()->username }} <strong class="caret"></strong> </a>
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
          </ul>
          <!--end nav pull-right-->
      </div>
  </div>
  <!--end container-->
</nav>
<!--end nav-->
