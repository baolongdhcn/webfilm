<?php
	class news extends Eloquent{
		protected $table='news';
		protected $fillable=array('id','title','title_en','image','content');
	}
?>