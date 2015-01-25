<?php

class First extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $record = $this->quotes->first();
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
	}
	
	function zzz()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $record = $this->quotes->first();
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
	}
	
	function gimme($val)
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $record = $this->quotes->get($val);
        
        $this->data['mug'] = $record['mug'];
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        
        $this->render();
	}
}