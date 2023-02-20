<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function register()
    {
        $data = [];
        $model = new UserModel();

        if ($this->request->getMethod() === 'post'){

        $rules = [
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required',
                'password'  => 'required',
                'password2' => 'matches[password]'
        ];
        $errors = [
                'name' => [
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
                'name' => $this->request->getPost('name'),
                'surname' => $this->request->getPost('surname'),
                'email' => $this->request->getPost('email'),
                'password'  => $this->request->getPost('password'),
            ]);
            return redirect()->to('/user/login');
        }
    }
        echo view('templates/header');
        echo view('user/register');
        echo view('templates/footer');
    }


    public function login()
{
    $data = [];
    $model = new UserModel();

    if ($this->request->getMethod() === 'post'){
        $rules = [
            'name' => 'required|min_length[6]|max_length[50]',
            'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
        ];

        $errors = [
          'password' => [
          'validateUser' => 'Tarkista käyttäjänimi tai salasana'
          ]
        ];

        if (! $this->validate($rules, $errors)) {
            $data['validation'] = $this->validator;
        }else{
            $model = new UserModel();
            $user = $model->where('name', $this->request->getVar('name'))->first();
            $this->setUserSession($user);
            return redirect()->to('/');
        }
    }

    echo view('templates/header');
    echo view('user/login');
    echo view('templates/footer');
}

private function setUserSession($user){
    $data = [
        'id' => $user['id'],
        'name' => $user['name'],
        'isLoggedIn' => true,
    ];

    session()->set($data);
    return true;
}


public function logout(){
    session()->destroy();
    return redirect()->to('/');
}

}