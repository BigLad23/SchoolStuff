<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        
        $data = [
            'users'  => $model->getAllUsers(),
            'name' => 'Aleksi'
        ];
        echo view('templates/header2', $data);
        echo view('templates/footer', $data);
        
    }
    
    public function register()
    {
        $data = [];
        $model = new UserModel();
        
        if ($this->request->getMethod() === 'post'){
            
            $rules = [
                'username' => 'required|min_length[6]|max_length[255]|is_unique[users.username]',
                'password'  => 'required|min_length[8]|max_length[255]',
                'password2' => 'matches[password]'
            ];
            $errors = [
                'username' => [
                    'required' => 'Käyttäjänimi ei voi olla tyhjä'
                ],
                'password' => [
                    'required' => 'Salasana ei voi olla tyhjä'
                ],
            ];
            
            if(! $this->validate($rules, $errors)){
                $data['validation'] = $this->validator;
            } else {
                $model->save([
                    'username' => $this->request->getPost('username'),
                    'password'  => $this->request->getPost('password'),
                    ]);
                    session()->setFlashdata('success', 'Rekisteröinti onnistui');
                    return redirect()->to('/user/login');
                }
            }
            echo view('templates/header2');
            echo view('user/register');
            echo view('templates/footer');
        }
        
}