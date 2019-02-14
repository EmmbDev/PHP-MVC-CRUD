<?php

namespace App\Controllers;
use App\Core\App;
use App\Models\CategoryService;
use App\Core;

class ProductController {

	public function create() {
		$service = new CategoryService(App::get('database'), 'categories');
		$categories = $service->getCategories();
		require "app/views/create_product.view.php";
	}
}