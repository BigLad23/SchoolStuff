<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('my_welcome');
		$data = [        
			'name' => 'Lauri'
		];
		echo view('templates/header', $data);
		echo view('news/list_view', $data);
		echo view('templates/footer', $data);
		
	}

	//--------------------------------------------------------------------

}
