
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
	<title></title>
	{{ HTML::script('js/bootstrap.min.js')}}
	{{ HTML::script('js/jquery-1.11.2.min.js')}}
	{{ HTML::style('css/bootstrap.min.css')}}
</head>
<body>


<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">

@include('header')
@yield('main')
@include('footer')


	</div>
	</div>
</div>

</body>
</html>