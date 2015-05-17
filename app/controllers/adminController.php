<?php

class adminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(),categ::$rules);
		if ($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}
		$category = new categ ;
		$category ->name = Input::get('name');
		$category ->description = Input::get('description');
		$category ->save();
		return Redirect::to('admin.index');
	}


public function newCategory()
 		{
 			return View::make('admin.newcat');
 		}

 	
 	public function StoreCategory()
 		{
 			

 			$validation = Validator::make(Input::all(), Categ::$rules);

 			if($validation->fails())
 			{

				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}

 			$categ = new Categ;

 			$categ->cat_name = Input::get('cat_name');

 			$categ->save();

 			return Redirect::back()->withInput();
 		}


 		public function editCategory($id)
 		{
 			if($category = Categ::find($id))
 			{
 				return View::make('admin.editCat', compact('category'));
 			}
 			else {
 				# 404 error page 
 			}
 			
 		}

 	public function updateCategory($id)
 		{
 			

 			$validation = Validator::make(Input::all(), Category::$rules);

 			if($validation->fails())
 			{

				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			$category = Category::find($id);

 			$category->name = Input::get('name');

 			$category->update();

 			return Redirect::route('adminIndex');
 		}

 	public function deleteCategory($id){
 		$category = Category::find($id);
		$category->delete();
		return Redirect::route('adminIndex');

	


}
}
