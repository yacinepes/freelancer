<?php
class project  extends Eloquent {
		protected $table = 'project';


		public function category()
	{
		return $this->belongsTo('project', 'category_id');
	}

	

}