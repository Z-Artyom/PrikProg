<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Customer extends Controller_Base {

	public function  before() {
        parent::before();
       if ($this->session->get('check') != 'admin' && $this->session->get('check') != 'customer') {
            $this->redirect('/');
        }      
    }

      public function action_index()
    {
      
    }

	public function action_marks()
    {   
        $_user = Cookie::get('user');
        $user = ORM::factory('user')->where('login', '=', Cookie::get('user'))->find();
        $radiosts = ORM::factory('radiost')->where('user_id', '=', $user->id)->find_all();
        $sum_mark = 0;
        foreach($radiosts as $radiost) {
                $marks = ORM::factory('mark')->where('radiost_id', '=', $radiost->id)->find_all();
                $count_marks = count($marks);
                foreach ($marks as $mark) {
                  $sum_mark = $sum_mark + $mark->number;
                }
                $avg_mark = round($sum_mark / $count_marks, 1);
                $likes['radio'][] = array(
                    'name' => $radiost->longname,
                    'count_marks' => $count_marks,
                    'avg_mark' => $avg_mark,
                );
            }

        $content = View::factory('v_marks')->bind('likes', $likes['radio'])->bind('user', $_user);
        $this->template->page_title = 'Оценки';
        $this->template->block_center = array($content);
    }
      
}