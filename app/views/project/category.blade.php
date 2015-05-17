<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
    </title>
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/css/navbar.css') }}
    {{ HTML::style('css/bootstrap-glyphicons.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}

    <!--<link rel="stylesheet" href='http//:fonts.googleaois.com/css?famoly=Oswall | Open+Sans'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script> 
    <![endif]-->
  </head>

  <body>
    @include('partials.nav')

    {{ HTML::script('js/jquery-1.11.2.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
  </body>
</html>