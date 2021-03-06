<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base {


	public function action_index() {

		$errors = array();

		if (isset($_POST['submit'])) {
        	$data = Arr::extract($_POST, array('username', 'password'));

            if (empty($data['username'])) {
                $errors[] = "Введите логин!";
            }

            if (empty($data['password'])) {
                $errors[] = "Введите пароль!";
            }

            else {
            $user = ORM::factory('user')->where('login', '=', $data['username'])->find();

            if ($user->loaded() && $user->password == $data['password'] && ($user->role->code == 'admin' || $user->role->code == 'customer')) {

            Cookie::set('user', $user->login);
            $this->session->set('check', $user->role->code);
            $this->redirect('/home');
        }

            else {
            
            $errors[] = "Неверный логин и/или пароль!";
        }
    }
            
}

        $content = View::factory('v_index')->bind('errors', $errors);
		$this->template->page_title = 'Авторизация';
		$this->template->block_center = array($content);	
}

    public function action_logout() {
        if (Cookie::get('user')) {
            Cookie::delete('user');
            $this->session->delete('check');
            $this->redirect('/');
        }
        else {
            $this->redirect('/');

        }
    }

}