<?php namespace App\Models;

use CodeIgniter\Model;

class RentalsModel extends Model
{
    protected $table = 'apartments';
    
    public function getAllapartments()
    {      
        return $this->findAll();
    }
}