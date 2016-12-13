<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Base {

	public function  before() {
        parent::before();
       if ($this->session->get('check') != 'admin' && $this->session->get('check') != 'customer') {
            $this->redirect('/');
        }      
    }

	public function action_index() {
		$user = Cookie::get('user');
		$content = View::factory('v_home')->bind('user', $user);
		$this->template->page_title = 'Добро пожаловать';
		$this->template->block_center = array($content);
	}

}