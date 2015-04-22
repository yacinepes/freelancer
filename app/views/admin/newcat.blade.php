
	{{ HTML::script('js/bootstrap.min.js')}}
	{{ HTML::script('js/jquery-1.11.2.min.js')}}
	{{ HTML::style('css/bootstrap.min.css')}}
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="jumbotron">
				<h1>
					category
				</h1>
				<p>
					This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>

			
				<div class="container">
		<h1>Register</h1>

		<form role="form" method="post" action="{{ URL::Route('newcategory') }}">
			<div class="form-group {{ ($errors->has('cat_name')) ? ' has-error' : '' }}">
				<label for="cat_name">Username: </lable>
					<input id="cat_name" name="cat_name" type="text" class="form-control">
					@if($errors->has('cat_name'))
						{{ $errors->first('cat_name') }}
					@endif
			</div>
		
			
			</div>
			{{ Form::token() }}
			<div class="form-group">
				<input type="submit" value="save" class="btn btn-default">
			</div>
		</form>
	</div>	
		</div>
	</div>
</div>