<?php
class categ  extends Eloquent {
	protected $table = 'category';
	public static $rules = ['cat_name' => 'required|min:3'];
	
}