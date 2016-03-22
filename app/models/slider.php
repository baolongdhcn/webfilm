<?php
	class slider extends Eloquent{
		protected $table='slider';
		protected $fillable=array('id','title_vn','title_en','image','content','description');
	}
?>