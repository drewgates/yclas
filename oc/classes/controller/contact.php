<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller {

	public function action_index()
	{
			$this->template->content = View::factory('pages/contact');
	}

}