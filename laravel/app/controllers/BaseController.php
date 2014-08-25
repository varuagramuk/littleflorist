<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function __construct(){
		$this->beforeFilter(function(){
			if(Auth::check()){
				View::share('super', 0);
				View::share('vendor', 0);	
				View::share('user', 0);	
				if(Auth::user()->isSuper){
					View::share('super', 1);	
				}elseif(Auth::user()->isVendor){
					View::share('vendor', 1);	
				}else{
					View::share('user', 1);	
				}
			}
		});
	}	

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
