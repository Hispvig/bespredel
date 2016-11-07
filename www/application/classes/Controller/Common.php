<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller_Template {
	public $template = 'common';
	public function before()
    {
        parent::before();
        View::set_global(Kohana::$config->load('mysite')->as_array());				
        $this->template->content = '';
        $this->template->styles = '';
        $this->template->scripts = '';
    }
}