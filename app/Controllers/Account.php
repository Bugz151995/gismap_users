<?php

namespace App\Controllers;

use App\Models\AccountModel;

class Account extends BaseController
{
    protected $helpers = ['form'];
    
    /**
     * signin to the system
     * @return string
     */
    public function signin()
    {
        $validation = \Config\Services::validation();
        $account_tbl = model(AccountModel::class);

        if (!$this->validate($validation->getRuleGroup('signin')))
            return view('signin', ['validation' => $this->validator]);

        session()->set($account_tbl->select('username, user_id, account_id')->where('username', $this->request->getPost('username'))->first());

        return redirect()->to('/home');
    }

    public function signout()
    {
        session()->destroy();

        return redirect()->to('/');
    }

    public function create()
    {
        $validation = \Config\Services::validation();
        $account = model(AccountModel::class);
        $user = model(UserModel::class);

        if (!$this->validate($validation->getRuleGroup('signup')))
            return view('signup', ['validation' => $this->validator]);

        $user->save([
            'fname' => $this->request->getPost('fname'),
            'mname' => $this->request->getPost('mname'),
            'lname' => $this->request->getPost('lname'),
            'contact_number' => $this->request->getPost('cnum'),
        ]);

        $account->save([
            'username' => $this->request->getPost('username'),
            'role' => 'user',
            'user_id' => $user->getInsertID(), 
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/success');
    }
}
