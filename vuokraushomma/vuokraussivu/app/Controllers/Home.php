<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome');
		$data = [        
			'name' => 'placeholder'
		];
		echo view('/templates/header', $data);
		echo view('welcome', $data);
		echo view('/templates/footer', $data);
	}
}
