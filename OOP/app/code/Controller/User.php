<?php

namespace Controller;

use Helper\FormHelper;
use Helper\Validator;
use Model\User as UserModel;

class User
{
    public function show($id)
    {
        echo 'User controller ID ' . $id;
    }


    public function register()
    {
        $form = new FormHelper('user/create', 'POST');
        $form->input([
            'Name' => 'name',
            'type' => 'text',
            'placeholder' => 'Vardas'
        ]);
        $form->input([
            'Name' => 'last_name',
            'type' => 'text',
            'placeholder' => 'Pavarde'
        ]);
        $form->input([
            'Name' => 'phone',
            'type' => 'text',
            'placeholder' => '+370.....'
        ]);
        $form->input([
            'Name' => 'email',
            'type' => 'email',
            'placeholder' => 'Email'
        ]);
        $form->input([
            'Name' => 'password',
            'type' => 'password',
            'placeholder' => '********'
        ]);
        $form->input([
            'Name' => 'password2',
            'type' => 'password',
            'placeholder' => '********'
        ]);
        $form->input([
            'Name' => 'create',
            'type' => 'submit',
            'value' => 'Register'
        ]);

        echo $form->getForm();
    }



    public function login()
    {
        $form = new FormHelper('user/check', 'POST');
        $form->input([
            'Name' => 'email',
            'type' => 'email',
            'placeholder' => 'Email'
        ]);
        $form->input([
            'Name' => 'password',
            'type' => 'password',
            'placeholder' => '********'
        ]);
        $form->input([
            'Name' => 'login',
            'type' => 'submit',
            'value' => 'Login'
        ]);
        echo $form->getForm();
    }

    public function create()
    {
        $passMatch = Validator::checkPassword($_POST['password'], $_POST['password2']);
        $isEmailValid = Validator::checkEmail($_POST['email']);
        $isEmailUnic = UserModel::emailUnic($_POST['email']);
        if($passMatch && $isEmailValid && $isEmailUnic){
            $user = new UserModel();
            $user->setName($_POST['name']);
            $user->setLastName($_POST['last_name']);
            $user->setEmail($_POST['email']);
            $user->setPassword(md5($_POST['password']));
            $user->setPhone($_POST['phone']);
            $user->setCityId(1);
            $user->save();

        }
    }

}
