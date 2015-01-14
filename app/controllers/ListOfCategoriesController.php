<?php

use Illuminate\Routing\Controller;

class ListOfCategoriesController extends BaseController {

	//HOME PAGE FOR CATEGORIES
	public function index()
	{
		$data['active_page']  = 'Categories';
		$data['breadCrumbs']  = BreadCrumb::generateBreadCrumbs($data['active_page']);
		$data['categories']   = ListOfCategory::categories(null);
		$data['blogs']        = Blog::all_blogs_under_categories();
		return View::make('list_of_categories.index')->withData($data);	
	}

	//VIEW EACH CATEGORIES
	public function show($parent_category)
	{
		$data['active_page'] = 'Categories';
		$data['breadCrumbs'] = BreadCrumb::generateBreadCrumbs($parent_category);
		$data['categories']  = ListOfCategory::categories($parent_category);
		$child_categories    = ListOfCategory::show_all_items_under($parent_category).$parent_category;
		$data['blogs']       = Blog::under_child_categories($child_categories);
		return View::make('list_of_categories.index')->withData($data);	
	}

}