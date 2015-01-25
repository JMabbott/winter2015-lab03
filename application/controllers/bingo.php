<?php

class Bingo extends Application
{
	function __construct()
	{
		parent:: __construct();
	}
	
	function index()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $record = $this->quotes->get(5);
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
	}
	
	function wisdom()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $record = $this->quotes->get(6);
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
	}
}