<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {

        return view('contato');
    }
    public function store()
    {
        $email = \Config\Services::email();

        $config = [
            'protocol' => 'sntp',
            'SMTP_HOST' => 'sandbox.smtp.mailtrap.io',
            'SMTP_USER' => '029711bb9b4cad',
            'SMTP_PASS' => '3f6ff9195d0b1f',
            'SMTP_PORT' => 2525,
            'wordWrap' => true,
        ];



        $email->initialize($config);



        $email->setFrom($this->request->getPost('email'), $this->request->getPost('name'));
        $email->setTo('nicolasusumak76@gmail.com');

        // $email->setSubject('Email Test');
        $email->setMessage($this->request->getPost('message'));

        $sent = $email->send();

        if(!$sent){
            var_dump($email->printDebugger());
        }
    }
}
