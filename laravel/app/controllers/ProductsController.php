<?php

class ProductsController extends BaseController {
	
	public function getIndex(){
	
		return View::make('products.index');
	}
}

?>