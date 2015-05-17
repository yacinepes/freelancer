<?php

class projectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			$category = categ::all();
			$project =project::all();
		return View::make('project.index')->with('category',$category)->with('project',$project);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			return View::make('project.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$project = new Project ;
		$project->title = Input::get('title');
		$project->person = Input::get('person');
		$project->save();
		
		return View::make('project.create');
	*/
		return 'store';
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function indexcategory($id)
	{
		$category = categ::find($id);
			$categories = categ::all();
		
		if ($category == null)
		{
			return Redirect::route('freelance-jobs')->with('fail', "That category doesn't exist.");
		}
		$project = $category->project()->get();

		return View::make('project.category')->with('category', $category)->with('project', $project)->with('categories', $categories);
	
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
