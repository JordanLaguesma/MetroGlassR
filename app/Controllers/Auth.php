<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// Initialize Models
use App\Models\Customers;
use App\Models\Users;

class Auth extends BaseController
{
    // Frontend
    public function ui_customer()
    {
        return view('frontend/auth/login_customer');
    }
    public function ui_user()
    {
        return view('frontend/auth/login_user');
    }

    // Backend
    public function auth_customer()
    {
        helper(['form']);
        $model = new Customers();

        $error = 1;

        $usermail_error = '';
        $password_error = '';

        $rules = $this->validate([
            'usermail' => 'required',
            'password' => 'required',
        ]);
        if(!$rules) {
            $validation = \Config\Services::validation();
            if($validation->getError('usermail')) {
                $usermail_error = $validation->getError('usermail');
            }
            if($validation->getError('password')) {
                $password_error = $validation->getError('password');
            }
        } else {
            $data = [
                'usermail' => $this->request->getVar('usermail'),
                'password' => $this->request->getVar('password'),
            ];
            $user = $model->where('username', $data['usermail'])->orWhere('email', $data['usermail'])->first();
            if($user) {
                $verify_pass = password_verify($data['password'], $user['password']);
                if($verify_pass) {
                    $error = 0;
                    $ses_data = [
                        'id'        => $user['id'],
                        'username'  => $user['username'],
                        'role    '  => $user['role'],
                        'logged_in' => TRUE,
                    ];
                    $session = session();
                    $session->set($ses_data);
                }
            }
        }
        $output = array (
            'error' => $error,
            'usermail_error' => $usermail_error,
            'password_error' => $password_error,
        );
        echo json_encode($output);
    }
    public function auth_user()
    {
        helper(['form']);
        $model = new Users();

        $error = 1;

        $usermail_error = '';
        $password_error = '';

        $rules = $this->validate([
            'usermail' => 'required',
            'password' => 'required',
        ]);
        if(!$rules) {
            $validation = \Config\Services::validation();
            if($validation->getError('usermail')) {
                $usermail_error = $validation->getError('usermail');
            }
            if($validation->getError('password')) {
                $password_error = $validation->getError('password');
            }
        } else {
            $data = [
                'usermail' => $this->request->getVar('usermail'),
                'password' => $this->request->getVar('password'),
            ];
            $user = $model->where('username', $data['usermail'])->orWhere('email', $data['usermail'])->first();
            if($user) {
                $verify_pass = password_verify($data['password'], $user['password']);
                if($verify_pass) {
                    $error = 0;
                    $ses_data = [
                        'id'        => $user['id'],
                        'username'  => $user['username'],
                        'role    '  => $user['role'],
                        'logged_in' => TRUE,
                    ];
                    $session = session();
                    $session->set($ses_data);
                }
            }
        }
        $output = array (
            'error' => $error,
            'usermail_error' => $usermail_error,
            'password_error' => $password_error,
        );
        echo json_encode($output);
    }
    public function logout_customer()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/customer/login');
    }
    public function logout_user()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/user/login');
    }

    // Register (customer-exclusive)
    public function ui_customer_register()
    {
        return view('frontend/auth/register_customer');
    }
    public function auth_customer_register()
    {
        helper(['form', 'time']);

        $model = new Customers();

        $error = 1;

        $firstname_error = '';
        $lastname_error  = '';
        $email_error     = '';
        $phone_error     = '';
        $address_error   = '';
        // $icon_error      = '';
        // $username_error  = '';
        $gender_error    = '';
        $birthdate_error = '';
        $password_error  = '';
        $confpass_error  = '';

        $rules = $this->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|valid_email|is_unique[customers.email]',
            'phone'     => 'required',
            'address'   => 'required',
            // 'icon'      => 'required',
            // 'username'  => 'required',
            'gender'    => 'required',
            'birthdate' => 'required',
            'password'  => 'required',
            'confpass'  => 'matches[password]',
        ]);
        if(!$rules) {
            $validation = \Config\Services::validation();
            if($validation->getError('firstname')) {
                $firstname_error = $validation->getError('firstname');
            }
            if($validation->getError('lastname')) {
                $lastname_error = $validation->getError('lastname');
            }
            if($validation->getError('email')) {
                $email_error = $validation->getError('email');
            }
            if($validation->getError('phone')) {
                $phone_error = $validation->getError('phone');
            }
            if($validation->getError('address')) {
                $address_error = $validation->getError('address');
            }
            // if($validation->getError('icon')) {
            //     $icon_error = $validation->getError('icon');
            // }
            // if($validation->getError('username')) {
            //     $username_error = $validation->getError('username'); 
            // }
            if($validation->getError('gender')) {
                $gender_error = $validation->getError('gender');
            }
            if($validation->getError('birthdate')) {
                $birthdate_error = $validation->getError('birthdate');
            }
            if($validation->getError('password')) {
                $password_error = $validation->getError('password');
            }
            if($validation->getError('confpass')) {
                $confpass_error = $validation->getError('confpass');
            }
        } else {
            $error = 0;
            $data = [
                'firstname' => $this->request->getVar('firstname'),
                'lastname'  => $this->request->getVar('lastname'),
                'email'     => $this->request->getVar('email'),
                'phone'     => $this->request->getVar('phone'),
                'address'   => $this->request->getVar('address'),
                // 'icon'       => $this->request->getVar('icon'),
                // 'username'   => $this->request->getVar('username'),
                'gender'     => $this->request->getVar('gender'),
                'birthdate'  => $this->request->getVar('birthdate'),
                'password'   => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'created_at' => now(),
                'status'     => 0
            ];
            $model->save($data);
        }
        $output = array (
            'error' => $error,
            'firstname_error' => $firstname_error,
            'lastname_error'  => $lastname_error,
            'email_error'     => $email_error,
            'phone_error'     => $phone_error,
            'address_error'   => $address_error,
            'gender_error'    => $gender_error,
            'birthdate_error' => $birthdate_error,
            'password_error'  => $password_error,
            'confpass_error'  => $confpass_error
        );
        echo json_encode($output);
    }
}
