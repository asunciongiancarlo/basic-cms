<?php 

use Illuminate\Routing\Controller;

class ContactUsController extends BaseController {

	public function index()
	{
		//GET ALL PUBLISH BANNERS
		$data['active_page']     = 'Contact Us';	
		$data['page_data']	 	 = DB::table('static_pages')->whereId(2)->first();	
		$data['page_data_map']	 = DB::table('static_pages')->whereId(3)->first();	
		return View::make('contact_us.index')->withData($data);
	}

}