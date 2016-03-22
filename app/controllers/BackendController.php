<?php
class BackendController extends BaseController {

	//Slider

	public function slider(){
		$slider = slider::get();
		return View::make('admin.home.slider.slider')->with('slider',$slider);
	}
	public function edit_slider($id){
		$id = slider::find($id);
		return View::make('admin.home.slider.edit_slider')->with('id',$id);
	}
	public function post_edit_slider(){
		$input=Input::all();
		$id=Input::get('id');     	

		$admin = slider::find($id);
		$admin->title_vn = $input['title_vn'];
		$admin->title_en = $input['title_en'];
		$admin->content = stripcslashes($input['content']);
		$admin->description = stripcslashes($input['description']);

   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png,gif'
		);
   		$validator = Validator::make($input, $rules);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#slider/edit/'.$id)->withErrors($validator);
		}
		else{
			if (Input::hasFile('image')){
				if (file_exists($admin->image)) {
	      			File::delete($admin->image);
	      		}
       			$image= Input::file('image');
  	    		$filename= $image->getClientOriginalName();
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename);
  	    		Image::make($image->getRealPath())->save($destinationPath);
  	    		$admin->image= $destinationPath;
  	    	}
	     	if($admin->save()){
			    return Redirect::to("admin/dashboard#slider");
			}
		}
	}
	public function delete_slider($id){
		$id = slider::find($id);
		$file_name = $id->image;
  		
  		if (file_exists($file_name)) {
      		File::delete($file_name);
      	}
		$id->delete();
		return Redirect::to("admin/dashboard#slider");
	}
	public function create_slider(){
		return View::make('admin.home.slider.create_slider');
	}
	public function post_create_slider(){
		$input=Input::all();

   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png,gif'
		);
   		$validator = Validator::make($input, $rules);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#slider/insert')->withErrors($validator);
		}
		else{
			if (Input::hasFile('image')){
       			$image= Input::file('image');
  	    		$filename= $image->getClientOriginalName();
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename);
  	    		Image::make($image->getRealPath())->save($destinationPath);

				$create = slider::create(array(
					"title_vn" => $input['title_vn'],
					"title_en" => $input['title_en'],
					"content" => stripcslashes($input['content']),
					"description" => stripcslashes($input['description']),
					"image" => $destinationPath,
					
		 		));
			}
		}
		return Redirect::to('admin/dashboard#slider');
	}
	////////////////////////////////////////////////////

	//News

	public function news(){
		$news = news::get();
		return View::make('admin.home.news.news')->with('news',$news);
	}
	public function edit_news($id){
		$id = news::find($id);
		return View::make('admin.home.news.edit_news')->with('id',$id);
	}
	public function post_edit_news(){
		$input=Input::all();
		$id=Input::get('id');     	

		$admin = news::find($id);
		$admin->title = $input['title'];
		$admin->content = stripcslashes($input['content']);

   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png,gif'
		);
   		$validator = Validator::make($input, $rules);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#slider/news/'.$id)->withErrors($validator);
		}
		else{
			if (Input::hasFile('image')){
				if (file_exists($admin->image)) {
	      			File::delete($admin->image);
	      		}
       			$image= Input::file('image');
  	    		$filename= $image->getClientOriginalName();
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename);
  	    		Image::make($image->getRealPath())->save($destinationPath);
  	    		$admin->image= $destinationPath;
  	    	}
	     	if($admin->save()){
			    return Redirect::to("admin/dashboard#news");
			}
		}
	}
	public function delete_news($id){
		$id = news::find($id);
		$file_name = $id->image;
  		
  		if (file_exists($file_name)) {
      		File::delete($file_name);
      	}
		$id->delete();
		return Redirect::to("admin/dashboard#news");
	}
	public function create_news(){
		return View::make('admin.home.news.create_news');
	}
	public function post_create_news(){
		$input=Input::all();

   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png,gif'
		);
   		$validator = Validator::make($input, $rules);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#news/insert')->withErrors($validator);
		}
		else{
			if (Input::hasFile('image')){
       			$image= Input::file('image');
  	    		$filename= $image->getClientOriginalName();
  	    		
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename);
  	    		Image::make($image->getRealPath())->save($destinationPath);

				$create = news::create(array(
					"title" => $input['title'],
					"content" => stripcslashes($input['content']),
					"image" => $destinationPath,
					
		 		));
			}
		}
		return Redirect::to('admin/dashboard#news');
	}
	////////////////////////////////////////////////////
}
?>