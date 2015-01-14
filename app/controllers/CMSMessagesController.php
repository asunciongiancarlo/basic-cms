<?php 
use Illuminate\Routing\Controller;

class CMSMessagesController extends BaseController {

	public function index()
	{
		return View::make('cms_messages.index')->withData(CMSMessage::listAllMessages());	
	}

	public function update($id)
	{
		CMSMessage::updateMessage($id);
		return Response::json(array('ok'));
	}
}