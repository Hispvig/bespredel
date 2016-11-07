<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Common {
 
    public function action_index()
    {
        $content = View::factory('index');
        $content->age = 'больше 18';
        $content->name = 'Васька';

        $title = 'Беспределье';
        $description = 'Добро пожаловать в Беспределье';
        $this->template->content = $content;
    }
 
}