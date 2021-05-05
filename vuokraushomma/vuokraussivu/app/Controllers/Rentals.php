<?php namespace App\Controllers;

use App\Models\RentalsModel;

class Rentals extends BaseController
{
    public function index()
    {
        $model = new RentalsModel();
    
        $data = [
            'apartments'  => $model->getAllapartments(),
            'name' => 'placeholder'
        ];
        // var_dump($data);
        echo view('templates/header', $data);
		echo view('rentals/rentals_view', $data);
		echo view('templates/footer', $data);
    }
}