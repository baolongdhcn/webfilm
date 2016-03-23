<?php
class HomeController extends BaseController {
	public function home(){
		
		return View::make('home')
		
		;
	}
	public function detailfilm(){
		
		return View::make('detailfilm')
		
		;
	}
	
}
?>
