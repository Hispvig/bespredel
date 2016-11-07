<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller_Template {
 
    public function action_index()
    {
        $content = View::factory('common')
              ->bind('age', $age);
        $age = 'больше 18';
        $content->name = 'Васька';
        $this->template->content = $content;
    }
 
}