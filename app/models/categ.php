<?php
class categ  extends Eloquent {
	protected $table = 'category';
	public static $rules = ['cat_name' => 'required|min:3'];
	
	public function project()
	{
		return $this->hasMany('project', 'category_id');
	}

	
}