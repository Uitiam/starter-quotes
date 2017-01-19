<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		//$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view

		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'what' => $record['what'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$num = rand (0, 6);

		$this->data['authors'] = $authors;

		$this->render();
	}

	public function random(){
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();


		$rand = rand (0, 6);

		$authors[] = array ('who' => $source[$rand]['who'], 'what' => $source[$rand]['what'], 'mug' => $source[$rand]['mug'], 'href' => $source[$rand]['where']);

		$this->data['authors'] = $authors;

		$this->render();
	}

}
