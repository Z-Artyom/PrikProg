<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	public $template = 'v_base';
	protected $Session;

	public function before() {
		parent::before();

		$site_name = 'Интернет-радио. Отчётность';
		$site_description = 'Отчётность. Интернет-радио';
		Cookie::$salt = 'fs456fds';
		Session::$default = 'Cookie';

		$this->session = Session::instance();

		$this->template->site_name = $site_name;
		$this->template->site_description = $site_description;
		$this->template->page_title = null;
		$this->template->block_center = null;

		$this->template->styles = array('content/css/style.css' => 'screen');
		$this->template->scripts = array();
}

}