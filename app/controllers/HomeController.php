<?php

class HomeController extends BaseController {

    public $layout = 'layouts.default';

	public function index()
	{
        $view = View::make('home');

        $view->nombre = "Ariel Orozco Rivera";

        $this->layout->title = 'Probando Laravel';
        $this->layout->content = $view;


	}

}