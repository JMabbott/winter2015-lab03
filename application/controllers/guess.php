<?php

class Guess extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $record = $this->quotes->get(4);
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
	}
}