<?php

class VendorsController extends BaseController {

	public function __construct(){
		$this->beforeFilter('csrf',array('on'=>'post'));		
	}

	public function getIndex(){

		return View::make('vendors.index')
				->with('vendors', Vendor::all());
	}

	public function postCreate(){
		$validator = Validator::make(Input::all(),Vendor::$rules);

		if($validator->passes()){
			$vendor = new Vendor;
			$vendor->firstname = Input::get('firstname');
			$vendor->save();

			return Redirect::to('admin/vendors/index')
				   ->with('message','Vendor Created');
		}

		return Redirect::to('admin/vendors/index')
				   ->with('message','Vendor not Created')
				   ->withErrors($validator)
				   ->withInput();
		
	}

	public function postDestroy(){
		$vendor = Vendor::find(Input::get('id'));

		if($vendor){
			$vendor->delete();
			return Redirect::to('admin/vendors/index')
				   ->with('message','Entry deleted successfully');
		}
		return Redirect::to('admin/vendors/index')
			 ->with('message','Something went wrong');
		
	}
}
?>
