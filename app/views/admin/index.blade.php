@include('header')
@yield('main')




@section('title')
		Admin Panel 
@stop



@section('content')
	<h3> Admin Panel : </h3>

	
<h2> Categories </h2>
	@foreach($categories as $category)

	{{ link_to_route('EditCategory', $category->name , $category->id ) }}   ||  {{ link_to_route('DeleteCategory', 'delete', $category->id ) }}<br>

	@endforeach


<h2> Products </h2>
	@foreach($products as $product)

	{{ link_to_route('EditProject', $project->title , $project->id ) }}   ||  {{ link_to_route('DeleteProject', 'delete', $product->id ) }}<br>

	@endforeach

@stop

@include('footer')