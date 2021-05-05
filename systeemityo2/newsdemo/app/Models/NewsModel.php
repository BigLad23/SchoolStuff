<?php namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $allowedFields = ['title', 'content', 'user_id'];
    
    public function getAllNews()
    {      
        return $this->findAll();
    }
}