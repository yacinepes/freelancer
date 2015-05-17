<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
	<title></title>
	{{ HTML::script('js/bootstrap.min.js')}}
	{{ HTML::script('js/jquery-1.11.2.min.js')}}
	{{ HTML::style('css/bootstrap.min.css')}}
	<style type="text/css">
	 .form-group{
	 	width: 500px;
	 	margin-left: 20px;
	 }
	</style>
</head>
<body>

	<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">

			<div class="panel panel-default">
				<div class="panel-heading">

					<h3 class="panel-title">
						{{ Lang::get('main.login')  }}
					</h3>
				</div>
				<div class="panel-body">
			
					{{ Form::open(array('class'=>'form-horizontal','role'=>'form'))  }}
						<div class="form-group">
					{{Form::label('email',Lang::get('main.email'))}}<br>
					<div class="col-sm-10">
						{{ Form::text('email','',array('class'=>'form-control text-left','placeholder'=>Lang::get('main.email'))) }}
					</div>
					</div>

							<div class="form-group">
					{{Form::label('password',Lang::get('main.password'))}}
					<div class="col-sm-10">
						{{ Form::password('password',array('class'=>'form-control text-left','placeholder'=>Lang::get('main.password'))) }}
					</div>
					
					
				</div>
				<div class="panel-footer">
				<div class "form-group">
					{{ Form::submit(Lang::get('main.login'),array('class'=>'btn btn-primary')) }}
				</div>
					 {{ Form::close()  }}
				</div>
			</div>
		</div>
	</div>
</div>


				
			



</body>
</html>